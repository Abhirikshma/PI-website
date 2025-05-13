/**
 * Publications Loader System
 * Fetches YAML data, parses it, and dynamically builds the HTML for publications.
 */
function loadPublications(yamlFilePath, containerId, pageSections) {
    fetch(yamlFilePath)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.text();
        })
        .then(yamlText => {
            const data = jsyaml.load(yamlText);
            const container = document.getElementById(containerId);
            if (!container) {
                console.error(`Container with ID "${containerId}" not found.`);
                return;
            }
            container.innerHTML = ''; // Clear previous content

            const fragment = document.createDocumentFragment();

            // Group publications by type for efficient lookup
            const publicationsByType = {};
            data.forEach(pub => {
                if (!publicationsByType[pub.type]) {
                    publicationsByType[pub.type] = [];
                }
                publicationsByType[pub.type].push(pub);
            });

            pageSections.forEach(sectionConfig => {
                const sectionDiv = document.createElement('div');
                sectionDiv.id = sectionConfig.id;
                sectionDiv.className = 'publication-section';

                const titleH2 = document.createElement('h2');
                titleH2.textContent = sectionConfig.title;
                sectionDiv.appendChild(titleH2);

                if (sectionConfig.subtitle) {
                    const subtitleP = document.createElement('p');
                    subtitleP.className = 'subtitle';
                    subtitleP.textContent = sectionConfig.subtitle;
                    sectionDiv.appendChild(subtitleP);
                }
                
                if (sectionConfig.id === 'all-atlas-papers-section') {
                    // Special handling for "All ATLAS Papers" link
                    const p = document.createElement('p');
                    const a = document.createElement('a');
                    a.href = "https://twiki.cern.ch/twiki/bin/view/AtlasPublic";
                    a.textContent = "List of all ATLAS papers (twiki.cern.ch)";
                    a.target = "_blank"; // Open in new tab
                    p.appendChild(a);
                    sectionDiv.appendChild(p);
                    fragment.appendChild(sectionDiv);
                    return; // Skip further processing for this special section
                }

                if (sectionConfig.id === 'all-mu3e-papers-section') {
                    // Special handling for "All Mu3e Papers" link
                    const p = document.createElement('p');
                    const a = document.createElement('a');
                    a.href = "https://www.psi.ch/en/mu3e/publications";
                    a.textContent = "List of all Mu3e papers (psi.ch)";
                    a.target = "_blank"; // Open in new tab
                    p.appendChild(a);
                    sectionDiv.appendChild(p);
                    fragment.appendChild(sectionDiv);
                    return; // Skip further processing for this special section
                }

                let sectionHasContent = false;
                const publicationsForSection = [];
                sectionConfig.types.forEach(type => {
                    if (publicationsByType[type]) {
                        publicationsForSection.push(...publicationsByType[type]);
                    }
                });

                if (publicationsForSection.length > 0) {
                    sectionHasContent = true;
                    // Sort publications by year (descending) and then by title (ascending)
                    publicationsForSection.sort((a, b) => {
                        if (b.year !== a.year) {
                            return b.year - a.year;
                        }
                        return a.title.localeCompare(b.title);
                    });

                    const publicationsByYear = {};
                    publicationsForSection.forEach(pub => {
                        if (!publicationsByYear[pub.year]) {
                            publicationsByYear[pub.year] = [];
                        }
                        publicationsByYear[pub.year].push(pub);
                    });

                    Object.keys(publicationsByYear).sort((a, b) => b - a).forEach(year => {
                        const yearDiv = document.createElement('div');
                        yearDiv.className = 'publication-year';
                        const yearH3 = document.createElement('h3');
                        yearH3.textContent = year;
                        yearDiv.appendChild(yearH3);
                        sectionDiv.appendChild(yearDiv);

                        const ul = document.createElement('ul');
                        ul.className = 'publications';

                        publicationsByYear[year].forEach(pub => {
                            const li = document.createElement('li');

                            const titleP = document.createElement('p');
                            titleP.className = 'title';
                            titleP.innerHTML = pub.title; // Use innerHTML for MathJax rendering
                            li.appendChild(titleP);

                            if (pub.authors) {
                                const authorsSpan = document.createElement('span');
                                // Assuming authors is a string. If it can be an array, join it.
                                authorsSpan.innerHTML = Array.isArray(pub.authors) ? pub.authors.join(', ') : pub.authors;
                                authorsSpan.innerHTML += '<br/>'; 
                                li.appendChild(authorsSpan);
                            }

                            if (pub.links && pub.links.length > 0) {
                                const linksDiv = document.createElement('div');
                                linksDiv.className = 'publication-links';
                                pub.links.forEach(link => {
                                    const linkWrapper = document.createElement('span');
                                    linkWrapper.className = 'link-wrapper';
                                    
                                    const a = document.createElement('a');
                                    a.href = link.url;
                                    a.textContent = link.text;
                                    if (link.url !== "#tbd" && link.url !== "#") { // Avoid new tab for placeholder links
                                        a.target = '_blank';
                                    }
                                    linkWrapper.appendChild(a);

                                    if (link.note) {
                                        const noteSpan = document.createElement('span');
                                        noteSpan.className = 'link-note';
                                        noteSpan.textContent = ` (${link.note})`;
                                        linkWrapper.appendChild(noteSpan);
                                    }
                                    linksDiv.appendChild(linkWrapper);
                                });
                                li.appendChild(linksDiv);
                            }

                            if (pub.event || pub.place || pub.date) {
                                const eventDetailsP = document.createElement('p');
                                eventDetailsP.style.marginTop = '5px';
                                let eventString = '';
                                if (pub.event && pub.event !== "TBD") { // Check for "TBD"
                                    eventString += pub.event;
                                }
                                if (pub.place && pub.place !== "TBD") { // Check for "TBD"
                                    if (eventString) eventString += ", ";
                                    eventString += pub.place;
                                }
                                if (pub.date && pub.date !== "TBD") { // Check for "TBD"
                                    if (eventString) eventString += ", ";
                                    eventString += pub.date;
                                }
                                
                                if (eventString) {
                                   eventDetailsP.textContent = `(${eventString})`;
                                   li.appendChild(eventDetailsP);
                                }
                            }
                            ul.appendChild(li);
                        });
                        sectionDiv.appendChild(ul);
                    });
                }

                if (sectionHasContent) {
                    fragment.appendChild(sectionDiv);
                }
            });

            container.appendChild(fragment);

            // After all content is added to the DOM, build/initialize navigation
            if (typeof window.initializePublicationNavigation === 'function') {
                window.initializePublicationNavigation();
            }
            
            // Tell MathJax to typeset the new content
            if (typeof MathJax !== 'undefined') {
                if (MathJax.typesetPromise) { // For MathJax v3
                    MathJax.typesetPromise([container]).catch(function (err) {
                        console.error('MathJax typesetting error: ' + err.message);
                    });
                } else if (MathJax.Hub && MathJax.Hub.Queue) { // For MathJax v2
                    MathJax.Hub.Queue(["Typeset", MathJax.Hub, container]);
                }
            }

            // Refresh header targets after dynamic content is loaded
            if (typeof window.refreshHeaderTargets === 'function') {
                window.refreshHeaderTargets();
            }

        })
        .catch(error => {
            console.error('Error loading or parsing publications YAML:', error);
            const container = document.getElementById(containerId);
            if (container) {
                container.innerHTML = '<p>Error loading publications. Please try again later.</p>';
            }
        });
}
