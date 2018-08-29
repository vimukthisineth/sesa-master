{{--
@extends('layouts.master')




@section('content')




    <style>
        td, th {
            padding: 0px 10px 0 0;
        }
    </style>



   --}}
{{-- <div class="container">
        <section id="fancyTabWidget" class="tabs t-tabs">
            <ul class="nav nav-tabs fancyTabs" role="tablist">

                <li class="tab fancyTab active">
                    <div class="arrow-down">
                        <div class="arrow-down-inner"></div>
                    </div>
                    <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true" data-toggle="tab"
                       tabindex="0"><span class="hidden-xs"><img src="{{asset('img/icon/1.png')}}" height="50" width="50"><br></span><span>Level 1</span></a>
                    <div class="whiteBlock"></div>
                </li>

                <li class="tab fancyTab">
                    <div class="arrow-down">
                        <div class="arrow-down-inner"></div>
                    </div>
                    <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true" data-toggle="tab"
                       tabindex="0"><span class="hidden-xs"><img src="{{asset('img/icon/2.png')}}" height="50" width="50"><br></span><span>Level 2</span></a>
                    <div class="whiteBlock"></div>
                </li>

                <li class="tab fancyTab">
                    <div class="arrow-down">
                        <div class="arrow-down-inner"></div>
                    </div>
                    <a id="tab2" href="#tabBody2" role="tab" aria-controls="tabBody2" aria-selected="true" data-toggle="tab"
                       tabindex="0"><span class="hidden-xs"><img src="{{asset('img/icon/3.png')}}" height="50" width="50"><br></span><span>Level 3</span></a>
                    <div class="whiteBlock"></div>
                </li>

                <li class="tab fancyTab">
                    <div class="arrow-down">
                        <div class="arrow-down-inner"></div>
                    </div>
                    <a id="tab3" href="#tabBody3" role="tab" aria-controls="tabBody3" aria-selected="true" data-toggle="tab"
                       tabindex="0"><span class="hidden-xs"><img src="{{asset('img/icon/4.png')}}" height="50" width="50"><br></span><span>Level 4</span></a>
                    <div class="whiteBlock"></div>
                </li>

            </ul>
            <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
                <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0"
                     aria-hidden="false" tabindex="0">
                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>COMPUTING</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 11512
                                    </td>
                                    <td>
                                        Essentials of Computing [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 11523
                                    </td>
                                    <td>
                                        Structured Programming [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 12533
                                    </td>
                                    <td>
                                        Data Structures, Algorithms Analysis and Design [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 12543
                                    </td>
                                    <td>
                                        Databases [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 12553
                                    </td>
                                    <td>
                                        Concepts of Object Oriented Programming [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>MANAGEMENT AND TECHNOLOGY</strong>
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 11012
                                    </td>
                                    <td>
                                        Economics[C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 11023
                                    </td>
                                    <td>
                                        Statistics for Computing Professionals [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 11032
                                    </td>
                                    <td>
                                        Principles of Management [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 12043
                                    </td>
                                    <td>
                                        Accounting Concepts and Costing [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>GENERIC COMPETENCIES</strong>
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        GNCT 11012
                                    </td>
                                    <td>
                                        Philosophy of Science [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        GNCT 13022
                                    </td>
                                    <td>
                                        Personal Progress and Development I [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2"><strong>MATHEMATICS</strong></td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        PMAT 12102
                                    </td>
                                    <td>
                                        Discrete Mathematics for Computing I [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>ENGLISH</strong>
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ELTU 11032
                                    </td>
                                    <td>
                                        English for Management Professionals [C]
                                    </td>
                                </tr>
                                <tr class="expand text-center">
                                    <td colspan="2">
                                        <div class="expand">
                                            <p class="col-md-10 col-md-offset-1">W3Schools is optimized for learning,
                                                testing, and training. Examples might be
                                                simplified to improve reading and basic
                                                understanding. Tutorials, references, and
                                                examples are constantly reviewed to avoid
                                                errors, but we cannot warrant full
                                                correctness of all content. While using
                                                this site, you agree to have read and
                                                accepted our terms of use, cookie and
                                                privacy policy. Copyright 1999-2017 by
                                                Refsnes Data. All Rights Reserved.
                                                Powered by W3.CSS.</p>

                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade" id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="true"
                     tabindex="0">
                    <div class="row">

                        <div class=" col-md-8 col-md-offset-2">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>COMPUTING</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 21512
                                    </td>
                                    <td>
                                        Computer Architecture and Operating Systems [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 21522
                                    </td>
                                    <td>
                                        Software Construction Technologies and Tools [C]
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                <tr>
                                    <td>
                                        SENG 21543
                                    </td>
                                    <td>
                                        Human Computer Interaction [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 21553
                                    </td>
                                    <td>Software Modelling [C]</td>
                                </tr>

                                <tr>
                                    <td>
                                        SENG 22572
                                    </td>
                                    <td>
                                        Software Process [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 22582
                                    </td>
                                    <td>
                                        Software Design and Software Architecture [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 22593
                                    </td>
                                    <td>
                                        Interactive Application Design and Development [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>MANAGEMENT AND TECHNOLOGY</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 21022
                                    </td>
                                    <td>
                                        Engineering Foundations for Computing [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>GENERIC COMPETENCIES</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        GNCT 23012
                                    </td>
                                    <td>
                                        Personal Progress and Development II [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2"><strong><span>MATHEMATICS</span></strong></td>
                                </tr>
                                <tr>
                                    <td>
                                        PMAT 21042
                                    </td>
                                    <td>
                                        Discrete Mathematics for Computing II [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2"><strong><span>Application Domains – Introductory (Net Centric Applications)</span></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 22602
                                    </td>
                                    <td>
                                        Web Application Development and Technologies [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 22612
                                    </td>
                                    <td>
                                        Introduction to Mobile Application Development [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 22622
                                    </td>
                                    <td>
                                        Information Systems [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 22632
                                    </td>
                                    <td>
                                        Telecare, mHealth and Consumer Health Informatics [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 22642
                                    </td>
                                    <td>
                                        Basic Animations and Games[E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 22032
                                    </td>
                                    <td>
                                        Operations Research I [E]
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade" id="tabBody2" role="tabpanel" aria-labelledby="tab2" aria-hidden="true"
                     tabindex="0">
                    <div class="row">
                        <div class=" col-md-8 col-md-offset-2">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>COMPUTING</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 31513
                                    </td>
                                    <td>
                                        Software Testing and Verification [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 31522
                                    </td>
                                    <td>
                                        Software Project Management [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 31573
                                    </td>
                                    <td>
                                        Speech Interfaces [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 31582
                                    </td>
                                    <td>
                                        Image Processing and Computer Graphics [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 34602
                                    </td>
                                    <td>
                                        Enterprise Information Systems [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 34612
                                    </td>
                                    <td>
                                        Data Communication [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>MANAGEMENT AND TECHNOLOGY</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 34012
                                    </td>
                                    <td>
                                        Research Methods [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 34022
                                    </td>
                                    <td>
                                        Statistical Techniques for Data Analysis [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>GENERIC COMPETENCIES</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        GNCT 32016
                                    </td>
                                    <td>
                                        Internship [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2"><strong>ENGLISH</strong></td>
                                </tr>
                                <tr>
                                    <td>
                                        ELTU 31022
                                    </td>
                                    <td>
                                        Communication Skills for Management Professionals [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong><span>Application Domains – Intermediate (Mobile Computing)</span></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 31533
                                    </td>
                                    <td>
                                        Distributed Computing and Web Security [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 31543
                                    </td>
                                    <td>
                                        Mobile Computing Technology [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 34593
                                    </td>
                                    <td>
                                        >Advanced Database Design [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 31553
                                    </td>
                                    <td>
                                        Health Information Management [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 31563
                                    </td>
                                    <td>
                                        Data Structures Algorithms for Games and Animation [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 31032
                                    </td>
                                    <td>
                                        Computer-Based Operations Management [E]
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade" id="tabBody3" role="tabpanel" aria-labelledby="tab3" aria-hidden="true"
                     tabindex="0">
                    <div class="row">
                        <div class=" col-md-8 col-md-offset-2">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>COMPUTING</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 44696
                                    </td>
                                    <td>
                                        Software Engineering Research Project [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>SENG 44706</td>
                                    <td>
                                        Software Development Project [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 41512
                                    </td>
                                    <td>
                                        Software Quality [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 41522
                                    </td>
                                    <td>
                                        Software Evolution [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 41532
                                    </td>
                                    <td>
                                        Formal Methods [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 41542
                                    </td>
                                    <td>
                                        Software Metrics and Measurements [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 42612
                                    </td>
                                    <td>
                                        Software Management [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 42622
                                    </td>
                                    <td>
                                        Usability Engineering [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 42632
                                    </td>
                                    <td>
                                        Software Safety and Reliability [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 42642
                                    </td>
                                    <td>
                                        Computer Simulation [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2">
                                        <strong>MANAGEMENT AND TECHNOLOGY</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 41022
                                    </td>
                                    <td>
                                        Professional Practice [C]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2"><strong><span>Application Domains – Advance 1 (Business Intelligent Systems)</span></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 41553
                                    </td>
                                    <td>
                                        Multimedia Applications for Web [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 41563
                                    </td>
                                    <td>
                                        Mobile Web Design and Implementation [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 41573
                                    </td>
                                    <td>
                                        Data Warehousing and Data Mining [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 41583
                                    </td>
                                    <td>
                                        Health Information Systems Design and Development [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 41593
                                    </td>
                                    <td>
                                        Computer Game Design [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 41033
                                    </td>
                                    <td>
                                        Enterprise Resource Planning and Control Systems [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info text-center" colspan="2"><strong><span>Application Domains – Advance 2 (Health Informatics)</span></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 42653
                                    </td>
                                    <td>
                                        Semantic Web and Ontological Engineering [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 42663
                                    </td>
                                    <td>
                                        Mobile Networks [E]

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 42673
                                    </td>
                                    <td>
                                        Business Intelligence and Decision Support Systems [E]

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 42683
                                    </td>
                                    <td>
                                        Medical Imaging and Biomedical Signal Processing [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SENG 41603
                                    </td>
                                    <td>
                                        Game Engine Design and Implementation [E]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MGTE 42043
                                    </td>
                                    <td>
                                        Advanced Planning and Scheduling [E]
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>



    <script src="{{asset('js/index.js')}}"></script>--}}{{--




    <div class="main">
        <div class="container">

            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12">
                    <h1>B.sc in Software Engineering Course Content</h1>
                    <div class="content-page">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <ul class="tabbable faq-tabbable">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">Level 1</a></li>
                                    <li><a href="#tab_2" data-toggle="tab">Level 2</a></li>
                                    <li><a href="#tab_3" data-toggle="tab">Level 3</a></li>
                                    <li><a href="#tab_4" data-toggle="tab">Level 4</a></li>

                                </ul>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <div class="tab-content" style="padding:0; background: #fff;">
                                    <!-- START TAB 1 -->
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="panel-group" id="accordion1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <strong>COMPUTING</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_1" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 11512
                                                                    </td>
                                                                    <td>
                                                                        Essentials of Computing [C]
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse in" id="accordion1_1">
                                                    <div class="panel-body">
                                                            </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_2" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <table>
                                                                <tr>
                                                                <td>
                                                                    SENG 11523
                                                                </td>
                                                                <td>
                                                                    Structured Programming [C]
                                                                </td></tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_2">
                                                    <div class="panel-body">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_3" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                           <table>
                                                               <tr>
                                                                   <td>
                                                                       SENG 12533
                                                                   </td>
                                                                   <td>
                                                                       Data Structures, Algorithms Analysis and Design [C]
                                                                   </td>
                                                               </tr>
                                                           </table>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_3">
                                                    <div class="panel-body">
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_4" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 12543
                                                                    </td>
                                                                    <td>
                                                                        Databases [C]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_4">
                                                    <div class="panel-body">
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_5" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                           <table>
                                                               <tr>
                                                                   <td>
                                                                       SENG 12553
                                                                   </td>
                                                                   <td>
                                                                       Concepts of Object Oriented Programming [C]
                                                                   </td>
                                                               </tr>
                                                           </table></a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_5">
                                                    <div class="panel-body">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <strong>MANAGEMENT AND TECHNOLOGY</strong>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_6" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        MGTE 11012
                                                                    </td>
                                                                    <td>
                                                                        Economics[C]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_6">
                                                    <div class="panel-body">
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_7" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        MGTE 11023
                                                                    </td>
                                                                    <td>
                                                                        Statistics for Computing Professionals [C]
                                                                    </td>
                                                                </tr>
                                                            </table>  </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_7">
                                                    <div class="panel-body">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_8" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        MGTE 11032
                                                                    </td>
                                                                    <td>
                                                                        Principles of Management [C]
                                                                    </td>
                                                                </tr>
                                                            </table>  </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_8">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_9" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        MGTE 12043
                                                                    </td>
                                                                    <td>
                                                                        Accounting Concepts and Costing [C]
                                                                    </td>
                                                                </tr>
                                                            </table>  </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_9">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <strong>GENERIC COMPETENCIES</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_9" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        GNCT 11012
                                                                    </td>
                                                                    <td>
                                                                        Philosophy of Science [C]
                                                                    </td>
                                                                </tr>
                                                            </table>  </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_9">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_10" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        GNCT 13022
                                                                    </td>
                                                                    <td>
                                                                        Personal Progress and Development I [C]
                                                                    </td>
                                                                </tr>
                                                            </table>  </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_10">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <strong>MATHEMATICS</strong>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_10" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        PMAT 12102
                                                                    </td>
                                                                    <td>
                                                                        Discrete Mathematics for Computing I [C]
                                                                    </td>
                                                                </tr>
                                                            </table>  </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_10">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <strong>ENGLISH</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion1_10" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        ELTU 11032
                                                                    </td>
                                                                    <td>
                                                                        English for Management Professionals [C]
                                                                    </td>
                                                                </tr>
                                                            </table>  </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion1_10">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <!-- END TAB 1 -->
                                    <!-- START TAB 2 -->
                                    <div class="tab-pane" id="tab_2">
                                        <div class="panel-group" id="accordion2">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <strong>COMPUTING</strong>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_4" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                           <table>
                                                               <tr>
                                                                   <td>
                                                                       SENG 21512
                                                                   </td>
                                                                   <td>
                                                                       Computer Architecture and Operating Systems [C]
                                                                   </td>
                                                               </tr>
                                                           </table></a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_4">
                                                    <div class="panel-body">
                                                          </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_5" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 21522
                                                                    </td>
                                                                    <td>
                                                                        Software Construction Technologies and Tools [C]
                                                                    </td>
                                                                </tr>


                                                            </table>  </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_5">
                                                    <div class="panel-body">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_6" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 21543
                                                                    </td>
                                                                    <td>
                                                                        Human Computer Interaction [C]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_6">
                                                    <div class="panel-body">
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_7" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                           <table>
                                                               <tr>
                                                                   <td>
                                                                       SENG 21553
                                                                   </td>
                                                                   <td>Software Modelling [C]</td>
                                                               </tr>
                                                           </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_7">
                                                    <div class="panel-body">
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_8" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 22572
                                                                    </td>
                                                                    <td>
                                                                        Software Process [C]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_8">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_9" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 22582
                                                                    </td>
                                                                    <td>
                                                                        Software Design and Software Architecture [C]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_9">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_10" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 22593
                                                                    </td>
                                                                    <td>
                                                                        Interactive Application Design and Development [C]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_10">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <strong>MANAGEMENT AND TECHNOLOGY</strong>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_12" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        MGTE 21022
                                                                    </td>
                                                                    <td>
                                                                        Engineering Foundations for Computing [C]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_12">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <strong>GENERIC COMPETENCIES</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_13" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        GNCT 23012
                                                                    </td>
                                                                    <td>
                                                                        Personal Progress and Development II [C]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_13">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <strong>MATHEMETICS</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_14" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        PMAT 21042
                                                                    </td>
                                                                    <td>
                                                                        Discrete Mathematics for Computing II [E]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_14">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <strong>Application Domains – Introductory (Net Centric Applications)</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_15" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 22602
                                                                    </td>
                                                                    <td>
                                                                        Web Application Development and Technologies [E]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_15">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_16" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 22612
                                                                    </td>
                                                                    <td>
                                                                        Introduction to Mobile Application Development [E]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_16">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_17" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 22622
                                                                    </td>
                                                                    <td>
                                                                        Information Systems [E]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_17">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_18" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 22632
                                                                    </td>
                                                                    <td>
                                                                        Telecare, mHealth and Consumer Health Informatics [E]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_18">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_19" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        SENG 22642
                                                                    </td>
                                                                    <td>
                                                                        Basic Animations and Games[E]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_19">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_20" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        MGTE 22032
                                                                    </td>
                                                                    <td>
                                                                        Operations Research I [E]
                                                                    </td>
                                                                </tr>
                                                            </table> </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_20">
                                                    <div class="panel-body">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- END TAB 3 -->
                                    <!-- START TAB 3 -->
                                    <div class="tab-pane" id="tab_3">
                                        <div class="panel-group" id="accordion3">
                                            <div class="panel panel-default">
                                                <div class="panel-heading panel-head">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_4" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_4">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_5" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_5">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_6" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_6">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_7" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_7">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END TAB 3 -->
                                    <div class="tab-pane" id="tab_4">
                                        <div class="panel-group" id="accordion4">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_4" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_4">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_5" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_5">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_6" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_6">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="#accordion2_7" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                            7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse" id="accordion2_7">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
        </div>
    </div>


@stop--}}
