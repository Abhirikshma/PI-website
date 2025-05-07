<?php
$subpath = dirname($_SERVER['REQUEST_URI']);
$incpath = "../assets/inc";
include($incpath . "/config.php");
$subPageLogo = $ATLASLogo; // Use centralized ATLAS logo
$subPageLink = $ATLASMainpageURL; // Link to ATLAS mainpage
include($headerInc);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATLAS Publications</title>
    <!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $publicationCss;?>">
    <!-- to enable mathjax (LaTeX code rendering) -->
    <script type="text/javascript" async
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/latest.js?config=TeX-MML-AM_CHTML">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body lang="en-US" dir="ltr" style="text-align:left;">
    <div class="sub-body">
        <div class="publications-container">
            <!-- JOURNAL PUBLICATIONS -->
            <div id="journal-publications" class="publication-section">
                <h1>Journal Publications</h1>
                <h3>(with significant contributions from members of our group)</h3>
            
                <div class="publication-year">
                    <h2>2024</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">A Triplet Track Trigger for the FCC-hh to improve the measurement of Di-Higgs production and the Higgs self-coupling</p>
                        T. Kar, A. Schöning <br>
                        <div class="publication-links">
                            <a href="https://doi.org/10.1016/j.nima.2024.170085">Nucl.Instrum.Meth.A 1072 (2025) 0168-9002</a>
                            <a href="https://arxiv.org/abs/2401.16046">arXiv:2401.16046 [physics.ins-det]</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2023</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Intel Stratix 10 FPGA design for track reconstruction for the ATLAS experiment at the HL-LHC</p>
                        Alessandra Camplani, Sebastian Dittmeier, et al.<br>
                        <div class="publication-links">
                            <a href="https://doi.org/10.1088/1748-0221/18/06/P06029"> A. Camplani et al 2023 JINST 18 P06029 </a>
                            <a href="https://arxiv.org/abs/2302.13609"> arXiv:2302.13609 [physics.ins-det]</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2022</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Search for resonant pair production of Higgs bosons in the \(b\bar{b}b\bar{b}\) final state using pp collisions at \(\sqrt{s}=13\) TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br/>
                        <div class="publication-links">
                            <a href="https://journals.aps.org/prd/abstract/10.1103/PhysRevD.105.092002"> Phys. Rev. D 105, 092002 </a>
                            <a href="https://arxiv.org/abs/2202.07288"> arXiv:2202.07288 [hep-ex]</a>
                        </div>
                    </li>
                </ul>
                
                <div class="publication-year">
                    <h2>2021</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Better Latent Spaces for Better Autoencoders</p>
                        Barry M. Dillon, Tilman Plehn, Christof Sauer, Peter Sorrenson<br/>
                        <div class="publication-links">
                            <a href="https://scipost.org/10.21468/SciPostPhys.11.3.061"> SciPost Phys. 11, 061 (2021) </a>
                            <a href="https://arxiv.org/abs/2104.08291"> arxiv:2104.08291 [hep-ph]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">The ATLAS Fast TracKer system</p>
                        The ATLAS Collaboration<br/>
                        <div class="publication-links">
                            <a href="https://iopscience.iop.org/article/10.1088/1748-0221/16/07/P07006"> 2021 JINST 16 P07006 </a>
                            <a href="https://arxiv.org/abs/2101.05078"> arXiv:2101.05078 [physics.ins-det]</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2018</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Search for \(W' \rightarrow tb\) in the hadronic final state with the ATLAS detector in \(\sqrt{s}=13\) TeV pp collisions</p>
                        The ATLAS Collaboration<br/>
                        <div class="publication-links">
                            <a href="https://arxiv.org/abs/1801.07893"> arxiv:1801.07893 [hep-ex] </a>
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PAPERS/EXOT-2017-02/">ATLAS Link</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Effects of Proton Irradiation on 60 GHz CMOS Transceiver Chip for Multi-Gbps Communication in High-Energy Physics Experiments</p>
                        I. Aziz, R. Brenner, S. Dittmeier, A. Schöning, et al.<br>
                        <div class="publication-links">
                            <a href="https://doi.org/10.1049/joe.2018.5402">J.Eng. (2019) 8, 5391-5396</a>
                            <a href="https://arxiv.org/abs/1810.11842">arXiv:1810.11842 [physics.ins-det]</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2017</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Determination of the strong coupling constant \(\alpha_{s}(M_Z)\) in next-to-next-to-leading order QCD using H1 jet cross section measurements</p>
                        H1 Collaboration<br/>
                        <div class="publication-links">
                            <a href="https://arxiv.org/abs/1709.07251">arXiv:1709.07251 [hep-ex]</a> accepted by EPJC
                            <a href="https://www-h1.desy.de/h1/www/publications/htmlsplit/DESY-17-137.long.poster.html">H1 Link</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2016</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Precision measurement and interpretation of inclusive \(W^+\), \(W^-\) and \(Z/\gamma^*\) production cross sections with the ATLAS detector</p>
                        The ATLAS Collaboration<br/>
                        <div class="publication-links">
                            <a href="http://arxiv.org/abs/1612.03016">arXiv:1612.03016 [hep-ex]</a> subm. to EPJC
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PAPERS/STDM-2012-20/">ATLAS Link</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Measurement of the double-differential high-mass Drell-Yan cross section in pp collisions at \(\sqrt{s} = 8\) TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br/>
                        <div class="publication-links">
                            <a href="http://link.springer.com/article/10.1007%2FJHEP08(2016)009">JHEP 08 (2016) 009</a>
                            <a href="http://arxiv.org/abs/1606.01736">arXiv:1606.01736 [hep-ex]</a>
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PAPERS/STDM-2014-06/">ATLAS Link</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Measurement of the angular coefficients in Z-boson events using electron and muon pairs from data taken at \(\sqrt{s} = 8\) TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br/>
                        <div class="publication-links">
                            <a href="http://link.springer.com/article/10.1007/JHEP08(2016)159">JHEP 08 (2016) 159</a>
                            <a href="http://arxiv.org/abs/1606.00689">arXiv:1606.00689 [hep-ex]</a>
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PAPERS/STDM-2014-10/">ATLAS Link</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Measurement of \(W^{\pm}\) and Z-boson production cross sections in pp collisions at \(\sqrt{s} = 13\) TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br/>
                        <div class="publication-links">
                            <a href="http://www.sciencedirect.com/science/article/pii/S0370269316302763">Phys. Lett. B 759 (2016) 601</a>
                            <a href="http://arxiv.org/abs/1603.09222">arXiv:1603.09222 [hep-ex]</a>
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PAPERS/STDM-2015-03/">ATLAS Link</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Identification of high transverse momentum top quarks in pp collisions at \(\sqrt{s} = 8\) TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="http://link.springer.com/article/10.1007%2FJHEP06%282016%29093">JHEP 06 (2016) 093</a>
                            <a href="http://arxiv.org/abs/1603.03127">arXiv:1603.03127</a>
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PAPERS/PERF-2015-04/">ATLAS Link</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Identification of boosted, hadronically decaying W bosons and comparisons with ATLAS data taken at \(\sqrt{s} = 8\) TeV</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="http://link.springer.com/article/10.1140/epjc/s10052-016-3978-z">EPJC 76(3), 1-47</a>
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PAPERS/PERF-2015-03/">ATLAS Link</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Measurement of the transverse momentum and \(\phi_{\eta}^*\) distributions of Drell-Yan lepton pairs in proton-proton collisions at \(\sqrt{s} = 8\) TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br/>
                        <div class="publication-links">
                            <a href="http://link.springer.com/article/10.1140/epjc/s10052-016-4070-4">Eur. Phys. J. C76 (2016) 1-61</a>
                            <a href="http://arxiv.org/abs/1512.02192">arXiv:1512.02192 [hep-ex]</a>
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PAPERS/STDM-2014-12/">ATLAS Link</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Feasibility studies for a wireless 60 GHz tracking detector readout</p>
                        S. Dittmeier, H.K. Soltveit, A. Schoening, D. Wiedner<br/>
                        <div class="publication-links">
                            <a href="https://doi.org/10.1016/j.nima.2016.06.016">Nucl.Instrum.Meth.A 830 (2016) 417-426</a>
                            <a href="https://arxiv.org/abs/1604.06259">arXiv:1604.06259 [physics.ins-det]</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2015</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Combined analysis of charm-quark fragmentation-fraction measurements</p>
                        M. Lisovyi, A. Verbytskyi, O. Zenaiev<br>
                        <div class="publication-links">
                            <a href="http://link.springer.com/article/10.1140%2Fepjc%2Fs10052-016-4246-y">Eur. Phys. J. C76 (2016) 397</a>
                            <a href="http://arxiv.org/abs/1509.01061">arXiv:1509.01061 [hep-ex]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">The PDF4LHC report on PDFs and LHC data: Results from Run I and preparation for Run II</p>
                        Juan Rojo, Alberto Accardi, Richard D. Ball, Amanda Cooper-Sarkar, Albert de Roeck, Stephen Farry, James Ferrando, Stefano Forte, Jun Gao, Lucian Harland-Lang, Joey Huston, Alexander Glazov, Maxime Gouzevitch, Claire Gwenlan, Katerina Lipka, Mykhailo Lisovyi, Michelangelo Mangano, Pavel Nadolsky, Luca Perrozzi, Ringaile Placakyte, Voica Radescu, Gavin P. Salam, Robert Thorne<br/> 
                        <div class="publication-links">
                            <a href="http://iopscience.iop.org/article/10.1088/0954-3899/42/10/103103">J.Phys. G42 (2015) 103103</a>
                            <a href="http://arxiv.org/abs/1507.00556">arXiv:1507.00556 [hep-ph]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Charm, Beauty and Top at HERA</p>
                        O. Behnke, A. Geiser, M. Lisovyi<br/> 
                        <div class="publication-links">
                            <a href="http://www.sciencedirect.com/science/article/pii/S0146641015000447">Prog.Part.Nucl.Phys. 84 (2015) 1-72</a>
                            <a href="http://arxiv.org/abs/1506.07519">arXiv:1506.07519 [hep-ex]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Combination of Differential \(D^{*\pm}\) Cross-Section Measurements in Deep-Inelastic \(ep\) Scattering at HERA</p>
                        H1, ZEUS Collaborations<br/> 
                        <div class="publication-links">
                            <a href="http://link.springer.com/article/10.1007%2FJHEP09%282015%29149">JHEP 1509 (2015) 149</a>
                            <a href="http://arxiv.org/abs/1503.06042">arXiv:1503.06042 [hep-ex]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Boosted Top Quarks and Jet Structure</p>
                        S. Schätzel, Habilitationsschrift, Universität Heidelberg, 2013<br/> 
                        <div class="publication-links">
                            <a href="http://link.springer.com/article/10.1140%2Fepjc%2Fs10052-015-3636-x">Eur. Phys. J. C (2015) 75: 415</a>
                            <a href="http://arxiv.org/abs/1403.5176">arXiv:1403.5176 [hep-ph]</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2014</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Benchmarking an Even Better HEPTopTagger</p>
                        C. Anders, C. Bernaciak, G. Kasieczka, T. Plehn, T. Schell<br/> 
                        <div class="publication-links">
                            <a href="http://journals.aps.org/prd/abstract/10.1103/PhysRevD.89.074047">Phys. Rev. D89 (2014) 074047</a>
                            <a href="http://arxiv.org/abs/1312.1504">arXiv:1312.1504 [hep-ph]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Tagging highly boosted top quarks</p>
                        S. Schätzel and M. Spannowsky<br/> 
                        <div class="publication-links">
                            <a href="http://prd.aps.org/abstract/PRD/v89/i1/e014007">Phys. Rev. D89 (2014) 014007</a>
                            <a href="http://arxiv.org/abs/1308.0540">arXiv:1308.0540 [hep-ph]</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2013</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Search for resonances decaying into top-quark pairs using fully hadronic decays in pp collisions with ATLAS at \(\sqrt{s} = 7\) TeV</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="http://link.springer.com/article/10.1007%2FJHEP01%282013%29116">JHEP 1301 (2013) 116</a>
                            <a href="http://arxiv.org/abs/arXiv:1211.2202">arXiv:1211.2202 [hep-ex]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Performance of jet substructure techniques for large-R jets in proton-proton collisions at \(\sqrt{s} = 7\) TeV using the ATLAS detector</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="http://link.springer.com/article/10.1007/JHEP09(2013)076">JHEP 1309 (2013) 076</a>
                            <a href="http://arxiv.org/abs/arXiv:1306.4945">arXiv:1306.4945 [hep-ex]</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2012</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Determination of the strange quark density of the proton from ATLAS data on
                        \(W\to \ell\nu\) and \(Z\to\ell\ell\) cross-sections</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="http://prl.aps.org/abstract/PRL/v109/i1/e012001">Phys.Rev.Lett. 109 (2012) 012001</a>
                            <a href="http://arxiv.org/abs/1203.4051">arXiv:1203.4051 [hep-ex]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Measurement of the inclusive \(W^{\pm}\) and \(Z/\gamma\) cross sections in the electron and muon decay channels in pp collisions at \(\sqrt{s} = 7\) TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="http://prd.aps.org/abstract/PRD/v85/i7/e072004">Phys.Rev. D85 (2012) 072004</a>
                            <a href="http://arxiv.org/abs/arXiv:1109.5141">arXiv:1109.5141 [hep-ex]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Measurement of the \(W \to \ell\nu\) and \(Z/\gamma^* \to \ell\ell\) production cross sections in proton-proton collisions at \( \sqrt{s} = 7\) TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="http://link.springer.com/article/10.1007%2FJHEP12%282010%29060">JHEP 12 (2010) 060</a>
                            <a href="http://arxiv.org/abs/arXiv:1010.2130">arXiv:1010.2130 [hep-ex]</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>All ATLAS Papers</h2>
                </div>
                <ul class="publications">
                    <li>
                        <div class="publication-links">
                            <a href="http://cdsweb.cern.ch/collection/ATLAS%20Papers">CERN Document Server</a>
                        </div>
                    </li>
                </ul>
            </div>
                
            <!-- PRE-PRINTS SECTION -->
            <div id="preprints-proceedings-pubnotes" class="publication-section">
                <h1>Pre-prints, Proceedings, Conference and Pub Notes</h1>
                
                <div class="publication-year">
                    <h2>2023</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Track reconstruction for the ATLAS Phase-II High-Level Trigger using Graph Neural Networks on FPGAs</p>
                        Sachin Gupta on behalf of the ATLAS TDAQ collaboration<br>
                        <div class="publication-links">
                            <a href="tbd">2023 CTD Proceedings</a>
                            <a href="https://cds.cern.ch/record/2880336">ATL-DAQ-PROC-2023-014</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Track reconstruction for the ATLAS Phase-II Event Filter using GNNs on FPGAs</p>
                        Sebastian Dittmeier on behalf of the ATLAS TDAQ collaboration<br>
                        <div class="publication-links">
                            <a href="https://doi.org/10.1051/epjconf/202429502032">2023 CHEP Proceedings</a>
                            <a href="https://cds.cern.ch/record/2870183">ATL-DAQ-PROC-2023-006</a>
                        </div>
                    </li>
                </ul>
                
                <div class="publication-year">
                    <h2>2022</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Linearized Track-Fitting on an FPGA</p>
                        Joachim Zinsser, Sebastian Dittmeier, André Schöning<br>
                        <div class="publication-links">
                            <a href="https://zenodo.org/record/8119737"> 2022 Connecting The Dots Proceedings</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">The AM08 Associative Memory ASIC Design, Architecture and Evaluation methodology</p>
                        Andreas Vgenopoulos, Sebastian Dittmeier, Gunnar Föhner, Dirk Gottschalk, André Schöning et al.<br>
                        <div class="publication-links">
                            <a href="https://doi.org/10.1109/MOCAST54814.2022.9837600"> 2022 MOCAST IEEE XPLORE Proceedings</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Going off topics to demix quark and gluon jets in \(\alpha_S\) extractions</p>
                        Matt LeBlanc, Benjamin Nachman and Christof Sauer<br>
                        <div class="publication-links">
                            <a href="https://arxiv.org/abs/2206.10642"> arXiv:2206.10642 [hep-ph]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Search for non-resonant pair production of Higgs bosons in the \(b\bar{b}b\bar{b}\) final state in pp collisions at \(\sqrt{s} = 13\) TeV with the ATLAS detector </p>
                        The ATLAS Collaboration<br>
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/CONFNOTES/ATLAS-CONF-2022-035/">ATLAS-CONF-2022-035</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2021</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Identification of hadronically-decaying top quarks using UFO jets with ATLAS in Run 2 </p>
                        The ATLAS Collaboration<br>
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PUBNOTES/ATL-PHYS-PUB-2021-028/">ATL-PHYS-PUB-2021-028</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2019</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">The ATLAS Hardware Track Trigger design towards first prototypes</p>
                        S. Dittmeier on behalf of the ATLAS TDAQ collaboration<br>
                        <div class="publication-links">
                            <a href="https://doi.org/10.22323/1.373.0049">PoS Vertex2019 (2020) 049</a>
                            <a href="http://cds.cern.ch/record/2703174">ATL-DAQ-PROC-2019-032</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Triplet Track Trigger for Future High Rate Experiments</p>
                        T. Kar, D. E. F. de Lima, A. Schoening, J. Wang<br>
                        <div class="publication-links">
                            <a href="https://arxiv.org/abs/1910.06946">PROC-CTD19-007</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2017</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Search for \(W'\rightarrow tb\) in the hadronic final state with the ATLAS detector in \(\sqrt{s}=13\) TeV pp collisions</p>
                        The ATLAS Collaboration<br>
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/CONFNOTES/ATLAS-CONF-2017-082/">ATLAS-CONF-2017-082</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Performance of Top Quark and W Boson Tagging in Run 2 with ATLAS</p>
                        The ATLAS Collaboration<br>
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/CONFNOTES/ATLAS-CONF-2017-064/">ATLAS-CONF-2017-064</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Identification of Hadronically-Decaying W Bosons and Top Quarks Using High-Level Features as Input to Boosted Decision Trees and Deep Neural Networks in ATLAS at \(\sqrt{s}=13\) TeV</p>
                        The ATLAS Collaboration<br>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/2259646?ln=de">ATL-PHYS-PUB-2017-004</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Wireless data transmission for high energy physics applications</p>
                        S. Dittmeier for the WADAPT consortium<br>
                        <div class="publication-links">
                            <a href="https://doi.org/10.1051/epjconf/201715000002">EPJ Web Conf. 150 (2017) 00002</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2016</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Results on BSM Higgs boson searches at ATLAS</p>
                        M. Giulini<br/>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/2223241">Conference Proceeding</a>
                        </div>
                        (BLOIS 2016, Blois, France, May 2016)
                    </li>

                    <li>
                        <p class="title">Search for heavy particles decaying to pairs of highly-boosted top quarks using lepton-plus-jets events in proton--proton collisions at \(\sqrt{s} = 13\) TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br>
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/CONFNOTES/ATLAS-CONF-2016-014/">ATLAS-CONF-2016-014</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Search for single production of vector-like quarks decaying into \(Wb\) in \(pp\) collisions at \(\sqrt{s} =\) 13 TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br>
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/CONFNOTES/ATLAS-CONF-2016-072/">ATLAS-CONF-2016-072</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Studies of b-tagging performance and jet substructure in a high \(p_T\) \(g\rightarrow b\bar{b}\) rich sample of large-R jets from p p collisions at \(\sqrt{s}\)=8 TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br>
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/CONFNOTES/ATLAS-CONF-2016-002/">ATLAS-CONF-2016-002</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Measurement of large radius jet mass reconstruction performance at \(\sqrt{s}\) = 8 TeV using the ATLAS detector</p>
                        The ATLAS Collaboration<br>
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/CONFNOTES/ATLAS-CONF-2016-008/">ATLAS-CONF-2016-006</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2015</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Boosted hadronic top identification at ATLAS for early 13 TeV data</p>
                        The ATLAS Collaboration<br>
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PUBNOTES/ATL-PHYS-PUB-2015-053/">ATLAS-CONF-2015-053</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Measurement of W and Z Boson Production Cross Sections in pp Collisions at sqrt(s)=13 TeV with the ATLAS Detector</p>
                        The ATLAS Collaboration<br>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/2045487">ATLAS-CONF-2015-039</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Identification of high transverse momentum top quarks in pp collisions at \(\sqrt{s}\) = 8 TeV with the ATLAS detector</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PUBNOTES/ATL-PHYS-PUB-2015-053/">ATLAS-CONF-2015-036</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Performance of jet substructure techniques in early \(\sqrt{s}\)=13 TeV pp collisions with the ATLAS detector</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/CONFNOTES/ATLAS-CONF-2015-035/">ATLAS-CONF-2015-035</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Identification of boosted, hadronically-decaying W and Z bosons in \(\sqrt{s}\)=13 TeV Monte Carlo Simulations for ATLAS</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PUBNOTES/ATL-PHYS-PUB-2015-033/">ATL-PHYS-PUB-2015-033</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Expected Performance of Boosted Higgs \((\rightarrow b \bar{b})\) Boson Identification with the ATLAS Detector at \(\sqrt{s}=13\) TeV</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PUBNOTES/ATL-PHYS-PUB-2015-035/">ATL-PHYS-PUB-2015-035</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Combination of Measurements of Inclusive Deep Inelastic \(e^{\pm}p\) Scattering Cross Sections and QCD Analysis of HERA Data</p>
                        H1, ZEUS Collaborations<br/> 
                        <div class="publication-links">
                            <a href="http://arxiv.org/abs/1506.06042">arXiv:1506.06042 [hep-ex]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Production of exclusive dijets in diffractive deep inelastic scattering at HERA</p>
                        ZEUS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="http://arxiv.org/abs/1505.05783">arXiv:1505.05783 [hep-ex]</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Development of wireless techniques in data and power transmission − application for particle physics detectors</p>
                        WADAPT consortium<br/> 
                        <div class="publication-links">
                            <a href="https://arxiv.org/abs/1511.05807">arXiv:1511.05807 [physics.ins-det]</a>
                            <a href="http://cds.cern.ch/record/2103848">CDS</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2014</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Performance of the Fast ATLAS Tracking Simulation (FATRAS) and the ATLAS Fast Calorimeter Simulation (FastCaloSim) with single particles</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/1669341">ATL-SOFT-PUB-2014-001</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">Performance of Boosted W Boson Identification with the ATLAS Detector</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/1690048">ATLAS-CONF-2014-004</a>
                        </div>
                    </li>

                    <li>
                        <p class="title">60 GHz wireless data transfer for tracker readout systems-first studies and results</p>
                        S. Dittmeier, N. Berger, H.K. Soltveit, A. Schoening, D. Wiedner<br/> 
                        <div class="publication-links">
                            <a href="https://doi.org/10.1088/1748-0221/9/11/C11002">2014 JINST 9 C11002</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2013</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Performance of boosted top quark identification in 2012 ATLAS data</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="http://cds.cern.ch/record/1571040">ATLAS-CONF-2013-084</a>
                        </div>
                        (Boost 2013, Flagstaff, USA)
                    </li>

                    <li>
                        <p class="title">Towards Multi-Gigabit readout at 60 GHz for the ATLAS silicon microstrip detector</p>
                        H.K. Soltveit, S. Dittmeier, A. Schoening, D. Wiedner<br/> 
                        <div class="publication-links">
                            <a href="https://doi.org/10.1109/NSSMIC.2013.6829448">10.1109/NSSMIC.2013.6829448</a>
                        </div>
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2012</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Search for Resonances Decaying into Top Quark Pairs Using Fully Hadronic Decays in pp Collisions with ATLAS at \(\sqrt{s} = 7\) TeV</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="http://cdsweb.cern.ch/record/1463916">ATLAS-CONF-2012-102</a>
                        </div>
                        (Boost 2012, Valencia, Spain)
                    </li>

                    <li>
                        <p class="title">Performance of large-R jets and jet substructure reconstruction with the ATLAS detector</p>
                        The ATLAS Collaboration<br/> 
                        <div class="publication-links">
                            <a href="http://cdsweb.cern.ch/record/1459530">ATLAS-CONF-2012-065</a>
                        </div>
                        (Boost 2012, Valencia, Spain)
                    </li>

                    <li>
                        <p class="title">Multi-Gigabit Wireless data transfer at 60 GHz</p>
                        H.K. Soltveit, R. Brenner, A. Schoening, D. Wiedner<br/>
                        <div class="publication-links">
                            <a href="https://doi.org/10.1088/1748-0221/7/12/C12016">JINST 7 (2012) C12016</a>
                            <a href="https://arxiv.org/abs/1206.2287">arxiv:1206.2287 [physics.ins-det]</a>
                        </div>
                    </li>
                </ul>
            </div>
                
            <!-- CONFERENCE TALKS SECTION -->
            <div id="conference-invited-talks" class="publication-section">
                <h1>Conference and Invited Talks</h1>
                
                <div class="publication-year">
                    <h2>2024</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">A graph neural network based cosmic muon trigger for the Mu3e experiment</p>
                        D. Karres<br/>
                        <div class="publication-links">
                            <a href="https://indico.cern.ch/event/1338689/contributions/6015413/attachments/2952865/5191195/chep2024_karres.pdf">Slides</a>
                        </div>
                        (27th International Conference on Computing in High Energy & Nuclear Physics (CHEP2024), Krakow, Poland, October 2024)
                    </li>
                    <li>
                        <p class="title">Performance of the parallelized General Triplet Track Fit implemented on the GPU</p>
                        A. Nandi<br/>
                        <div class="publication-links">
                            <a href="https://indico.cern.ch/event/1338689/contributions/6018377/attachments/2952883/5191227/General_Triplet_Track_fit_CHEP24.pdf">Slides</a>
                        </div>
                        (27th International Conference on Computing in High Energy & Nuclear Physics (CHEP2024), Krakow, Poland, October 2024)
                    </li>   
                    <li>
                        <p class="title">Online track reconstruction with graph neural networks on FPGAs for the ATLAS experiment</p>
                        S. Dittmeier<br/>
                        <div class="publication-links">
                            <a href="https://indico.cern.ch/event/1338689/contributions/6015383/attachments/2951232/5187787/202410_CHEP_GNN_final.pdf">Slides</a>
                        </div>
                        (27th International Conference on Computing in High Energy & Nuclear Physics (CHEP2024), Krakow, Poland, October 2024)
                    </li>
                    <li>
                        <p class="title">Track reconstruction for the ATLAS Phase-II Event Filter using GNNs on FPGAs</p>
                        S. Dittmeier<br/>
                        <div class="publication-links">
                            <a href="https://indico.desy.de/event/42884/contributions/159264/attachments/88982/119459/dpg2024_dittmeier_final.pdf">Slides</a>
                        </div>
                        (DPG-Frühjahrstagung 2024, Karlsruhe, March 2024)
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2023</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Track reconstruction for the ATLAS Phase-II HLT using GNNs on FPGAs</p>
                        S. Gupta<br/>
                        <div class="publication-links">
                            <a href="https://indico.cern.ch/event/1290426/contributions/5582390/attachments/2733485/4752521/Satellite_CTD_SachinGupta.pdf">Slides</a>
                        </div>
                        (8th International Connecting the Dots Workshop − Mini-Workshop on Real Time Tracking, Toulouse, France, October 2023)
                    </li>

                    <li>
                        <p class="title">Track reconstruction for the ATLAS Phase-II HLT using GNNs on FPGAs</p>
                        S. Dittmeier<br/>
                        <div class="publication-links">
                            <a href="https://indico.jlab.org/event/459/contributions/11375/attachments/9434/13680/CHEP_GNNonFPGAforEFTracking.pdf">Slides</a>
                        </div>
                        (26th International Conference on Computing in High Energy & Nuclear Physics (CHEP2023), Norfolk, USA, May 2023)
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2022</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">A Triplet Track Trigger for FCC-hh & its impact on measuring the Higgs self-coupling</p>
                        T. Kar<br/>
                        <div class="publication-links">
                            <a href="https://indico.cern.ch/event/1066234/contributions/4709010/attachments/2387936/4081953/TKar_FCCPhyWeek2022.pdf">Slides</a>
                        </div>
                        (5th FCC Physics Workshop, Liverpool (online), UK, February 2022)
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2019</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">The ATLAS Hardware Track Trigger design towards first prototypes</p>
                        S. Dittmeier<br/>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/2695028/files/ATL-DAQ-SLIDE-2019-791.pdf">Slides</a>
                        </div>
                        (Vertex 2019, Lopud Island, Croatia, October 2019)
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2017</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Search for heavy resonances decaying to top quarks</p>
                        C. Anders<br/>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/2302602/files/ATL-PHYS-SLIDE-2018-067.pdf">Slides</a>
                        </div>
                        (SUSY 2017, Mumbai, India, December 2017)
                    </li>

                    <li>
                        <p class="title">W mass measurement with the ATLAS detector</p>
                        M. Lisovyi<br/>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/2280192/files/ATL-COM-PHYS-2017-1226.pdf">Slides</a>
                        </div>
                        (QCD@LHC 2017, Debrecen, Hungary, August 2017)
                    </li>

                    <li>
                        <p class="title">Experimental Overview</p>
                        C. Anders<br/>
                        (BOOST 2017, Buffalo, USA, July 2017)
                    </li>

                    <li>
                        <p class="title">Boosted jet tagging techniques in ATLAS</p>
                        C. Anders<br/>
                        (VBScan Kickoff meeting, Split, Croatia, June 2017)
                    </li>

                    <li>
                        <p class="title">Large R jets and boosted object tagging in ATLAS</p>
                        C. Anders<br/>
                        (Graduiertenkollegseminar, Karlsruhe, May 2017)
                    </li>

                    <li>
                        <p class="title">Wireless data transmission for high energy physics applications</p>
                        S. Dittmeier<br/>
                        <div class="publication-links">
                            <a href="https://indico.cern.ch/event/577003/contributions/2445863/attachments/1421952/2179841/slides_dittmeier_ctd_032017_v3.pdf">Slides</a>
                        </div>
                        (CTD/WIT17, LAL-Orsay, France, March 2017)
                    </li>

                    <li>
                        <p class="title">Suche nach neuen Phänomenen mit Jet-Substrukturmethoden und hochenergetischen Topquarks beim ATLAS Experiment</p>
                        C. Anders<br/>
                        (DPG 2017, Münster, March 2017)
                    </li>
                </ul>

                <!-- Continue with other years for conference talks... -->
                <div class="publication-year">
                    <h2>2016</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">The Fast (but not furious) TracKer for ATLAS: a track trigger based on FPGAs and Associative Memory chips</p>
                        M. Lisovyi<br/>
                        <div class="publication-links">
                            <a href="https://indico.lal.in2p3.fr/event/3347/">Slides</a>
                        </div>
                        (LAL Orsay, France, December 2016)
                    </li>

                    <li>
                        <p class="title">Hard diffraction at HERA</p>
                        A. Bolz<br/>
                        <div class="publication-links">
                            <a href="http://www-h1.desy.de/psfiles/talks/16/2016_ICHEP2016_Bolz.pdf">Slides</a>
                        </div>
                        (ICHEP 2016, Chicago, USA)
                    </li>

                    <li>
                        <p class="title">Search for new resonances coupling to third generation quarks in pp collisions at 13 TeV at ATLAS</p>
                        D. Ferreira De Lima<br/>
                        <div class="publication-links">
                            <a href="http://indico.cern.ch/event/432527/contributions/2208689/">Slides</a>
                        </div>
                        (ICHEP 2016, Chicago, USA, August 2016)
                    </li>

                    <li>
                        <p class="title">W and Z inclusive and differential cross sections at ATLAS</p>
                        M. Lisovyi<br/>
                        <div class="publication-links">
                            <a href="http://indico.cern.ch/event/432527/contributions/1072028/">Slides</a>
                        </div>
                        (ICHEP 2016, Chicago, USA, August 2016)
                    </li>

                    <li>
                        <p class="title">Boosted top-tagging at ATLAS</p>
                        C. Anders<br/>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/2203588">ATL-PHYS-SLIDE-2016-441</a>
                        </div>
                        (Boost 2016, Zürich, Schweiz, July 2016)
                    </li>

                    <li>
                        <p class="title">ATLAS ttbar Resonance Searches</p>
                        David Sosa<br/>
                        <div class="publication-links">
                            <a href="http://cds.cern.ch/record/2199201?ln=en">ATL-PHYS-SLIDE-2016-401</a>
                        </div>
                        (SUSY 2016, Melbourne, Australia, July 2016)
                    </li>

                    <li>
                        <p class="title">Large R jets and boosted object tagging in ATLAS</p>
                        C. Anders<br/>
                        (Universität Freiburg, Juni 2016)
                    </li>

                    <li>
                        <p class="title">Results on BSM Higgs boson searches at ATLAS</p>
                        M. Giulini<br/>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/2159710">ATL-PHYS-SLIDE-2016-283</a>
                        </div>
                        (BLOIS 2016, Blois, France, May 2016)
                    </li>

                    <li>
                        <p class="title">Charm, Beauty and Top − WG4 Summary</p>
                        M. Lisovyi, M. Mulders, M. Stahlhofen<br/>
                        <div class="publication-links">
                            <a href="https://indico.desy.de/contributionDisplay.py?contribId=14&confId=12482">Slides</a>
                        </div>
                        (DIS 2016, Hamburg, Germany, April 2016)
                    </li>

                    <li>
                        <p class="title">Searches for new Physics with boosted objects</p>
                        C. Anders<br/>
                        (Universität Bonn, January 2016)
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2015</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Boosted top quark reconstruction and searches with boosted objects at ATLAS</p>
                        C. Anders<br/>
                        (Universität Göttingen, December 2015)
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2014</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">ATLAS Measurements of Boosted Objects</p>
                        C. Anders<br/>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/1753360/files/ATL-PHYS-SLIDE-2014-588.pdf">ATL-PHYS-SLIDE-2014-588</a>
                        </div>
                        (Boost 2014, London, UK, August 2014)
                    </li>

                    <li>
                        <p class="title">60 GHz Wireless Data Transfer for Tracker Readout Systems − First Studies and Results</p>
                        S. Dittmeier<br/>
                        <div class="publication-links">
                            <a href="https://indico.cern.ch/event/293354/contributions/672344/attachments/549126/756778/WIT2014_Dittmeier.pdf">Slides</a>
                        </div>
                        (WIT2014, Philadelphia, USA, May 2014)
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2013</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Searching for top-quark pair resonances in the all-hadronic final state with ATLAS</p>
                        G. Kasieczka </br>
                        <div class="publication-links">
                            <a href="https://www.smi.oeaw.ac.at/download/HEPHY-SMI-Seminar_07102013.pdf">HEPHY − SMI seminar on fundamental interactions and symmetries</a>
                        </div>
                        (HEPHY − Institut für Hochenergiephysik, Wien, Österreich, October 2013)
                    </li>
                    <li>
                        <p class="title">Top-tagging at High Jet Multiplicity</p>
                        S. Schätzel </br>
                        <div class="publication-links">
                            <a href="http://physics.uoregon.edu/~soper/TeraJets2013/TeraJets2013Talks/schaetzel.pdf">Jet Substructure Workshop</a>
                        </div>
                        (University of Oregon, Eugene, USA, April 2013)
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2012</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title"><em>\(t\bar{t}\)</em> Resonance Searches with ATLAS</p>
                        G. Kasieczka</br>
                        (IPPP Durham, UK, October 2012)
                        </li>

                    <li>
                        <p class="title">Recent ATLAS Results on <em>\(t\bar{t}\)</em> Resonance</p>
                        G. Kasieczka</br>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/1491163">ATL-PHYS-SLIDE-2012-688</a>
                        </div>
                        (Boost 2012, Valencia, Spain, July 2012)
                    </li>

                    <li>
                        <p class="title">Studies on jet substructure at ATLAS</p>
                        S. Schätzel</br>
                        <div class="publication-links">
                            <a href="http://cds.cern.ch/record/1491164/files/ATL-PHYS-SLIDE-2012-689.pdf">ATL-PHYS-SLIDE-2012-689</a>
                        </div>
                        (Boost 2012, Valencia, Spain, July 2012)
                    </li>

                    <li>
                        <p class="title">Search for Higgs Bosons Beyond the Standard Model with ATLAS</p>
                        C. Anders</br>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/1450106">ATL-PHYS-SLIDE-2012-275</a>
                        </div>
                        (
                        MCTP 12, Ann Arbor, USA, April 2012)
                    </li>

                    <li>
                        <p class="title"> A self seeded first level track trigger for ATLAS</p>
                        A. Schöning</br>
                        <div class="publication-links">
                            <a href="http://iopscience.iop.org/1748-0221/7/10/C10010/">2012 JINST 7 C10010</a>
                        </div>
                        (
                        Workshop on Intelligent Trackers 2012, Pisa, Italy, March 2012)
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2010</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title"> A Fast Track Trigger for ATLAS</p>
                        S. Schmitt und A. Schöning</br>
                        <div class="publication-links">
                            <a href="http://iopscience.iop.org/1748-0221/5/07/C07013">2010 JINST 5 C07013</a>
                        </div>
                        (
                        Workshop on Intelligent Trackers 2010, Berkeley, USA, February 2010)
                    </li>
                </ul>
            </div>
        </div>
        
<!--------------------------------posters------------------------------------------------------>

        <div class="publications-container">
            <div id="poster-publications" class="publication-section">
                <h1>Posters</h1>
            
                <div class="publication-year">
                    <h2>2024</h2>
                </div>

                <ul class="publications">
                    <li>
                        <p class="title">FPGA implementation of the General Triplet Track Fit </p>
                        K. Tastepe</br>
                        <div class="publication-links">
                            <a href="https://indico.cern.ch/event/1338689/contributions/6015445/attachments/2950576/5186496/Heidelberg_PI-FPGA_Implementation_of_the_GTTF_POSTER.pdf">Poster</a>
                        </div>
                        (27th International Conference on Computing in High Energy & Nuclear Physics (CHEP2024), Krakow, Poland, October 2024)
                    </li> 
                </ul>

                <div class="publication-year">
                    <h2>2022</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title"> Linearized Track-Fitting on an FPGA </p>
                        J. Zinsser</br>
                        <div class="publication-links">
                            <a href="https://indico.cern.ch/event/1103637/contributions/4825738/">Abstract and Video</a>
                            <a href="https://zenodo.org/record/8119441">Poster</a>
                        </div>
                        (7th International Connecting the Dots Workshop, Princeton University, Princeton, USA, May 2022)
                    </li>
                </ul>

                <div class="publication-year">
                    <h2>2019</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">Triplet Track Trigger for Future Hadron Collider Experiments</p>
                        T. Kar</br>
                        <div class="publication-links">
                            <a href="https://indico.cern.ch/event/727555/contributions/3427917/">FCC-Week-Kar-2019</a>
                        </div>
                        (FCC Week 2019, Brussels, Belgium, June 2019)
                    </li>

                    <li>
                        <p class="title">Triplet Track Trigger for Future High Rate Experiments</p>
                        T. Kar<br/>
                        <div class="publication-links">
                            <a href="https://indico.cern.ch/event/742793/contribuheadertions/3298741/">CTD-WIT-Kar-2019</a>
                        </div>
                        (Connecting The Dots / Intelligent Trackers 2019, Valencia, Spain, April 2019)
                    </li>
                </ul>
                
                <div class="publication-year">
                    <h2>2016 and Earlier</h2>
                </div>
                <ul class="publications">
                    <li>
                        <p class="title">The ATLAS Fast Tracker Processing Units − input and output data preparation</p>
                        A. Bolz<br/>
                        <div class="publication-links">
                            <a href="https://cds.cern.ch/record/2209342?ln=en">ATL-DAQ-SLIDE-2016-502</a>
                        </div>
                        (ICHEP 2016, Chicago, USA)
                    </li>
                    
                    <li>
                        <p class="title">Preparing the ATLAS Jet Trigger for High Luminosity</p>
                        G. Kasieczka<br/>
                        <div class="publication-links">
                            <a href="http://cds.cern.ch/record/1357586?ln=en">ATL-DAQ-SLIDE-2011-259</a>
                        </div>
                        (PLHC 11, Perugia, Italy)
                    </li>
                </ul>
            </ul>
        </div>
        </div>
    </div>
</body>
</html>

<?php 
include($footerInc);
?>
