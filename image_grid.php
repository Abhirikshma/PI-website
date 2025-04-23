<?php
// filepath: /home/mue/mandok/git/PI-website/assets/inc/image_grid.php
// This file assumes $subpath and $figures are defined in the including file (e.g., main_page.php)
?>
<!-- Wrap the image row in a Bootstrap container -->
<div class="container">
    <!-- Collage of our pictures -->
    <div id="image-container">
        <script>
            let fetchedImages = []; // Store fetched images globally
            let currentOddCols = 1; // Store calculated columns globally
            // Store base and current dimensions globally
            const baseImageWidth = 120;
            const baseImageHeight = 160;
            let currentImageWidth = baseImageWidth;
            let currentImageHeight = baseImageHeight;

            // Function to shuffle an array (Fisher-Yates)
            function shuffleArray(array) {
                for (let i = array.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));
                    [array[i], array[j]] = [array[j], array[i]]; // Swap elements
                }
            }

             // Function to calculate and set grid columns and container width
             // Returns an object { columnsChanged: bool, sizeChanged: bool }
            function adjustImageGrid() {
                const imgContainer = document.getElementById('image-container');
                const parentContainer = imgContainer.parentElement;
                if (!parentContainer) return { columnsChanged: false, sizeChanged: false };

                const previousOddCols = currentOddCols;
                const previousImageWidth = currentImageWidth;

                const availableWidth = parentContainer.clientWidth;
                const gapWidth = 5;
                const baseImageUnitWidth = baseImageWidth + gapWidth;
                let maxCols = Math.floor((availableWidth + gapWidth) / baseImageUnitWidth);
                const minCols = 3;

                let calculatedImageWidth = baseImageWidth; // Start with base
                let calculatedImageHeight = baseImageHeight;

                if (maxCols < minCols) {
                    const targetCols = minCols;
                    const totalGapWidth = (targetCols - 1) * gapWidth;
                    const availableImageWidth = availableWidth - totalGapWidth;
                    const newImageWidth = Math.max(1, Math.floor(availableImageWidth / targetCols));
                    const newImageHeight = Math.round(newImageWidth * (baseImageHeight / baseImageWidth));

                    calculatedImageWidth = newImageWidth; // Store calculated values
                    calculatedImageHeight = newImageHeight;
                    currentOddCols = targetCols;
                } else {
                    calculatedImageWidth = baseImageWidth; // Use base
                    calculatedImageHeight = baseImageHeight;

                    currentOddCols = maxCols % 2 === 0 ? maxCols - 1 : maxCols;
                    currentOddCols = Math.max(minCols, currentOddCols);
                    currentOddCols = Math.min(7, currentOddCols);
                }

                // Update global dimensions AFTER calculation
                currentImageWidth = calculatedImageWidth;
                currentImageHeight = calculatedImageHeight;

                // Apply container styles
                imgContainer.style.gridTemplateColumns = `repeat(${currentOddCols}, ${currentImageWidth}px)`;
                const calculatedWidth = (currentOddCols * currentImageWidth) + ((currentOddCols - 1) * gapWidth);
                imgContainer.style.width = calculatedWidth + 'px';

                // Determine what changed
                const columnsChanged = previousOddCols !== currentOddCols;
                const sizeChanged = previousImageWidth !== currentImageWidth;

                return { columnsChanged: columnsChanged, sizeChanged: sizeChanged };
            }

            // Helper function to get valid neighbor indices
            function getNeighbors(index, cols, totalCells) {
                const neighbors = [];
                const row = Math.floor(index / cols);
                const col = index % cols;

                // Top
                if (row > 0) neighbors.push(index - cols);
                // Bottom
                if (row < Math.floor((totalCells - 1) / cols)) neighbors.push(index + cols);
                // Left
                if (col > 0) neighbors.push(index - 1);
                // Right
                if (col < cols - 1) neighbors.push(index + 1);

                return neighbors.filter(n => n >= 0 && n < totalCells); // Ensure neighbors are within bounds
            }

            // Function to update sizes of existing items without full re-render
            function updateItemSizes() {
                const container = document.getElementById('image-container');
                if (!container) return;

                const items = container.children;
                for (let item of items) {
                    if (item.classList.contains('image-collage-item')) {
                        const img = item.querySelector('img');
                        if (img) {
                            img.style.width = currentImageWidth + 'px';
                            img.style.height = currentImageHeight + 'px';
                        }
                    } else if (item.classList.contains('empty-grid-cell')) {
                        item.style.width = currentImageWidth + 'px';
                        item.style.minHeight = currentImageHeight + 'px';
                    }
                }
            }

            // Function to render the grid with images and empty cells
            function renderImageGrid(imageList) {
                const container = document.getElementById('image-container');
                if (!container || !imageList) return; // Safety check

                container.innerHTML = ''; // Clear previous content

                // --- Process images (find main, collect others) ---
                let mainImage = null;
                let otherImages = [];
                imageList.forEach(image => {
                    if (image.includes('main_')) {
                        mainImage = image;
                    } else {
                        otherImages.push(image);
                    }
                });
                // --- End Process images ---

                // Adjust grid layout *before* rendering items (this sets global vars)
                adjustImageGrid();
                const cols = currentOddCols; // Use the calculated columns

                // --- Prepare grid items ---
                const totalImages = imageList.length;
                if (cols <= 0) return;

                const totalRows = Math.ceil(totalImages / cols);
                const totalCells = totalRows * cols;
                const centerIndex = Math.floor(totalCells / 2);

                let gridItems = new Array(totalCells).fill(null);
                let availableIndices = Array.from(Array(totalCells).keys());
                let mainImageIndex = -1; // Keep track of main image position

                // Place main image in the center if it exists and remove the index
                if (mainImage !== null && centerIndex < totalCells) {
                     gridItems[centerIndex] = mainImage;
                     mainImageIndex = centerIndex;
                     const idxToRemove = availableIndices.indexOf(centerIndex);
                     if (idxToRemove > -1) {
                         availableIndices.splice(idxToRemove, 1);
                     }
                }

                shuffleArray(availableIndices);

                let imagesToPlaceCount = otherImages.length;
                for (let i = 0; i < imagesToPlaceCount && i < availableIndices.length; i++) {
                    const gridIndex = availableIndices[i];
                    gridItems[gridIndex] = otherImages[i];
                }
                // --- End Initial Placement ---

                // --- Improve empty cell distribution ---
                let emptyIndices = [];
                let imageIndices = [];
                gridItems.forEach((item, index) => {
                    if (item === null) {
                        emptyIndices.push(index);
                    } else if (index !== mainImageIndex) { // Exclude main image from potential swaps
                        imageIndices.push(index);
                    }
                });

                const maxIterations = 5; // Limit iterations to prevent infinite loops
                for (let iter = 0; iter < maxIterations; iter++) {
                    let swappedThisPass = false;
                    let currentEmptyIndices = [...emptyIndices]; // Work on a copy

                    for (let i = 0; i < currentEmptyIndices.length; i++) {
                        const e1 = currentEmptyIndices[i];
                        if (gridItems[e1] !== null) continue; // Skip if no longer empty due to a swap

                        const neighbors = getNeighbors(e1, cols, totalCells);
                        let adjacentEmptyNeighbor = -1;

                        for (const n of neighbors) {
                            if (gridItems[n] === null) {
                                adjacentEmptyNeighbor = n;
                                break;
                            }
                        }

                        if (adjacentEmptyNeighbor !== -1) {
                            // Found adjacent empty cells: e1 and adjacentEmptyNeighbor
                            // Try to swap adjacentEmptyNeighbor with an image
                            let suitableImageIdx = -1;
                            shuffleArray(imageIndices); // Randomize search for swap candidate

                            for (const imgIdx of imageIndices) {
                                const imgNeighbors = getNeighbors(imgIdx, cols, totalCells);
                                const isImageAdjacentToE1 = imgNeighbors.includes(e1);

                                if (isImageAdjacentToE1) continue; // Skip if image is adjacent to the first empty cell

                                // Check if the new empty spot (imgIdx) would be adjacent to *other* empty cells
                                let newEmptySpotIsSafe = true;
                                for (const emptyCheckIdx of emptyIndices) {
                                    if (emptyCheckIdx !== e1 && emptyCheckIdx !== adjacentEmptyNeighbor) {
                                        const emptyCheckNeighbors = getNeighbors(emptyCheckIdx, cols, totalCells);
                                        if (emptyCheckNeighbors.includes(imgIdx)) {
                                            newEmptySpotIsSafe = false;
                                            break;
                                        }
                                    }
                                }

                                // Combine checks for suitability
                                const isSuitableSwap = !isImageAdjacentToE1 && newEmptySpotIsSafe;

                                if (isSuitableSwap) {
                                    suitableImageIdx = imgIdx;
                                    break;
                                }
                            }

                            if (suitableImageIdx !== -1) {
                                // Perform the swap
                                const imageToMove = gridItems[suitableImageIdx];
                                gridItems[suitableImageIdx] = null; // Old image spot is now empty
                                gridItems[adjacentEmptyNeighbor] = imageToMove; // Old empty spot now has image

                                // Update tracking arrays
                                emptyIndices = emptyIndices.filter(idx => idx !== adjacentEmptyNeighbor);
                                emptyIndices.push(suitableImageIdx);
                                imageIndices = imageIndices.filter(idx => idx !== suitableImageIdx);
                                imageIndices.push(adjacentEmptyNeighbor);

                                swappedThisPass = true;
                                break; // Break inner neighbor check loop for e1
                            }
                        }
                    }

                    if (!swappedThisPass) {
                        break; // Exit iterations if no swaps were made
                    }
                }
                // --- End Improve empty cell distribution ---

                // --- Render grid items (images or empty cells) ---
                gridItems.forEach(item => {
                    if (item !== null) {
                        // Render image item
                        const imageElement = document.createElement('a');
                        imageElement.href = "<?php echo dirname($subpath);?>/people.php";
                        imageElement.className = 'image-collage-item';

                        const img = document.createElement('img');
                        img.src = `<?php echo $figures;?>/group_members/${item}`;
                        img.alt = item;
                        // Use current (potentially scaled) dimensions
                        img.style.width = currentImageWidth + 'px';
                        img.style.height = currentImageHeight + 'px';
                        img.style.objectFit = 'cover';

                        if (!item.includes('main_')) {
                            img.classList.add('greyscale-image');
                        }

                        imageElement.appendChild(img);
                        container.appendChild(imageElement);
                    } else {
                        // Render empty cell
                        const emptyCell = document.createElement('div');
                        emptyCell.className = 'empty-grid-cell';
                        // Set dimensions for empty cell to match images
                        emptyCell.style.width = currentImageWidth + 'px';
                        emptyCell.style.minHeight = currentImageHeight + 'px';
                        container.appendChild(emptyCell);
                    }
                });
                // --- End Render grid items ---
            }

            // Fetch the list of images
            fetch("<?php echo dirname($subpath);?>/assets/inc/read_images.php")
            .then(response => response.json())
            .then(images => {
                fetchedImages = images; // Store globally
                renderImageGrid(fetchedImages); // Initial render
            })
            .catch(err => console.error('Error loading images:', err));

            // Rerender grid on window resize ONLY if column count changes, otherwise just update sizes
            window.addEventListener('resize', () => {
                // Optional: Add a debounce/throttle mechanism here for performance
                const changes = adjustImageGrid(); // Adjust styles and check what changed

                if (changes.columnsChanged) {
                    // If columns changed, a full re-render is needed to adjust structure/empties
                    renderImageGrid(fetchedImages);
                } else if (changes.sizeChanged) {
                    // If only size changed (scaling), just update existing element sizes
                    updateItemSizes();
                }
                // If neither columns nor size changed, do nothing
            });
        </script>
    </div>
</div>