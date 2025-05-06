<?php
$subpath = dirname(dirname(dirname($_SERVER['REQUEST_URI'])));
$incpath = "../../../assets/inc";
include($incpath . "/config.php");
// Define the subpage logo path and link before including the header
$subPageLogo = $ATLASLogo; // Use centralized ATLAS logo
$subPageLink = $ATLASMainpageURL; // Use centralized ATLAS mainpage URL
include($headerInc);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PI Main webpage</title>
	<!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
    <!-- to enable mathjax (LaTeX code rendering) -->
    <script type="text/javascript" async
	  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/latest.js?config=TeX-MML-AM_CHTML">
	</script>
</head>

<body>
    <div class="sub-body">


<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        </br>
        <h1 class="western">Track finding with Graph Neural Networks on FPGAs</h1> 
        </br>
        <h2 class="western">Graph Neural Networks</h2> 

        <p class="text-block">
            Graph Neural Networks (GNNs) represent a cutting-edge paradigm in machine learning tailored for graph-structured data. Unlike traditional neural networks, GNNs excel 
            at capturing intricate relationships within complex systems, such as social networks or molecular structures. By aggregating information from neighboring nodes, GNNs 
            enable more informed predictions and insightful analysis of interconnected data. This approach has proven transformative across diverse domains, from recommendation 
            systems to bioinformatics, making GNNs a pivotal tool for understanding and leveraging the rich structure inherent in graph data. The application of GNNs to track finding 
            has emerged as a revolutionary approach for track reconstruction for particle physics experiments. 
        </p>
        </br>
        <h2 class="western">Track finding with Graph Neural Networks</h2> 

        <p class="text-block">
            Over the last years, the suitability of GNNs has been demonstrated for a variety of high-energy physics use cases, such as jet tagging, calorimeter energy measurements, and in 
            particular charged particle track reconstruction. Recently, excellent tracking performance has been demonstrated using ATLAS ITk simulation samples. Our work builds on top 
            of the developments from the Exa.TrkX and GNN4ITK projects, and makes use of the same track reconstruction pipeline. 
        </p>
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/GNN_pipeline.png' width='100%'>
        </div>
        </br>
        <p class="caption-text">
            Schematic overview of the GNN-based track finding pipeline. <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PLOTS/IDTR-2022-01/" target="_blank" rel="noopener noreferrer"> Source</a>
        </p>
        </br>
        <p class="text-block">
            The graph construction phase aims to efficiently create true edges, connection of hits that originate from the same particle, while minimizing false ones from the detector hit point cloud. 
            Two methods are explored, metric learning and module map. Metric learning embeds node features using an MLP to connect nearby nodes, while the module map derives 
            connections based on simulated particle trajectories. An interaction network iteratively processes the resulting graph's latent features, obtained from node and edge encoding 
            MLPs. The latent features are transformed into edge classification scores, representing the probability of an edge originating from a true particle track. Applying a threshold 
            removes false edges. Track candidates are formed by segmenting the graph, creating sets of connected components, and applying a walkthrough algorithm in cases of multiple 
            paths for a specific node. 
        </p>
        </br>
        <h2 class="western">Field Programmable Gate Array (FPGA)</h2> 

        <p class="text-block">
            An FPGA is a reconfigurable chip that allows to create and modify digital circuits using a language called Hardware Description Language (HDL). FPGAs consist of programmable 
            logic blocks, configurable interconnects and programmable input/output blocks. FPGAs are often used to prototype new electronic devices, simulate complex systems, or create
            custom hardware for a specific application. They offer unparalleled advantages such as low latency, high-throughput parallel computing and customizable digital hardware
            interfaces. For these reasons, they are widely used in trigger and data acquisition systems in the field of particle physics. Similar to GPUs, they have found their way into 
            heterogeneous computing architectures in the form of PCIe cards that can be easily installed in a server. The accessibility of FPGA programming has significantly improved 
            over the last years, for example through High Level Synthesis (HLS) and more advanced tools. HLS automates the translation of abstract, algorithmic descriptions written in
            high-level languages, like C++, into hardware implementations. 
        </p>
        </br>
        <h2 class="western">Graph Neural Networks on FPGAs</h2> 

        <p class="text-block">
            Energy efficiency and data throughput are crucial criteria for tracking solutions in the ATLAS Event Filter system. The utilization of FPGAs as hardware accelerators holds
            the potential to significantly decrease the overall system power consumption. When it comes to the inference of Neural Networks, FPGAs offer the advantage of harnessing 
            data types with arbitrary precision, known as quantization, enabling a reduction in both model size and energy consumption. Additionally, FPGAs excel in leveraging sparsity, 
            especially in scenarios where pruned models can be fully unrolled. In such cases, each processing element can have its dedicated hardware, maximizing the efficiency of the 
            FPGA implementation. To implement machine learning techniques on FPGAs, tools that build upon HLS are typically employed, like HLS4ML or FINN. We work actively on the
            implementation of the tracking pipeline presented above on an AMD FPGA using the FINN framework. 
        </p>
        </br>
        
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>