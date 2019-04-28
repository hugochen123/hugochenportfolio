@extends('layouts.theme_main_layout')

@section('content')

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Hugo Chen</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#footer">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-coffee text-white text-center">
    <div class="container">
    <div class="row">
        <div class="col-md-5 col-lg-5">
      <img class="img-fluid mb-5 d-block mx-auto" src="{!! Theme::url('custom/img/profile.png') !!}" alt="">
        </div>
        <div class="col-md-7 col-lg-7">
      <h1 class="text-uppercase mb-0">A Unique Perspective</h1>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">Web Application Developer - Software Engineer</h2>
        </div>
        </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="bg-bear text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">About</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <p class="lead">A fast learner and a passionate software developer with over four years of professional experience. Highly skilled in both front-end and back-end development. Well-versed in numerous programming languages including PHP, Java, MySQL and Node.js, and enjoy learning new languages and development techniques. Experienced in all stages of the development cycle for dynamic web applications. Delivered premium-quality applications that are still widely used and have achieved a good reputation among users.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto">
            <div class="text-center mt-4">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                    <a class="btn btn-outline-light btn-social text-center rounded" href="https://github.com/hugochen123" target="_blank">
                        <i class="fab fa-fw fa-github"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn btn-outline-light btn-social text-center rounded" href="https://www.linkedin.com/in/hugo-chen-61b79596/" target="_blank">
                        <i class="fab fa-fw fa-linkedin-in"></i>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 mr-auto">
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="{{URL::asset('Download/Hugo_Chen-CV.pdf')}}" download>
                <i class="fas fa-download mr-2"></i>
                Download My Resume!
                </a>
            </div>
        </div>
       </div>
    </div>
  </section>

  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
      <hr class="star-dark mb-5">
      <h3 class="text-uppercase text-secondary mb-2">Business Projects</h3>
      
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-asap">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{!! URL::asset('img/portfolio/asap/ASAP_front.jpg') !!}" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-printer-cloud">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{!! URL::asset('img/portfolio/printer_cloud/printer_front.jpg') !!}" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-ticbox">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{!! URL::asset('img/portfolio/ticbox/ticbox_front.JPG') !!}" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-intuitiontuition">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{!! URL::asset('img/portfolio/intuitiontuition/intuitiontuition_front.jpg') !!}" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-therightnutrition">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{!! URL::asset('img/portfolio/therightnutrition/therightnutrition_front.jpg') !!}" alt="">
          </a>
        </div>
      </div>
      <h3 class="text-uppercase text-secondary mb-2">Open Srouce Projects</h3>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-portfolio">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{!! URL::asset('img/portfolio/portfolio/portfolio_front.jpg') !!}" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-5">
          <h4 class="text-uppercase mb-4">About Freelancing</h4>
          <p class="lead mb-0">I like the challenges from different freelancing works and I am happy to see people grow their business through my skills. Please don't hesitate to contact me if you have an exciting project and need extra resources. </p>
        </div>
        <div class="col-md-2 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">3B Agnes Street
            <br>Noble Park, VIC 3174</p>
        </div>
        <div class="col-md-2 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Phone</h4>
          <p class="lead mb-0">+61 416 986 852
            <br>(Business Hour Only)</p>
        </div>
        
      </div>
    </div>
  </footer>

  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; HugoChenPortfolio 2019</small>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-asap">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0"><font class="text-danger font-weight-bold">A</font>LDI <font class="text-danger font-weight-bold">S</font>tore <font class="text-danger font-weight-bold">Ap</font>plication</h2>
            <span class="badge badge-success">CakePHP</span>
            <span class="badge badge-success">iPad</span>
            <span class="badge badge-success">Bootstrap</span>
            <span class="badge badge-success">JavaScript</span>
            <span class="badge badge-success">RESTful</span>
            <span class="badge badge-success">MySQL</span>
            <span class="badge badge-success">PHPUnit</span>
            <span class="badge badge-success">AWS</span>
            <span class="badge badge-success">Git</span>
            <span class="badge badge-success">JIRA</span>
            <span class="badge badge-success">FreshDesk</span>
            <span class="badge badge-success">Invision</span>
            <hr class="mb-5">

            <ul class="nav nav-tabs mb-1" id="asapTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="asap-task-tab" data-toggle="tab" href="#asap-task" role="tab" aria-controls="asap-task" aria-selected="true">Store Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="asap-form-tab" data-toggle="tab" href="#asap-form" role="tab" aria-controls="asap-form" aria-selected="false">Compliance Forms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="asap-print-tab" data-toggle="tab" href="#asap-print" role="tab" aria-controls="asap-print" aria-selected="false">Price Card Printing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="asap-pcp-tab" data-toggle="tab" href="#asap-pcp" role="tab" aria-controls="asap-pcp" aria-selected="false">ASAP 5.0 - PCP</a>
            </li>
            </ul>
            <div class="tab-content" id="asapTabContent">
                <div class="tab-pane fade show active" id="asap-task" role="tabpanel" aria-labelledby="asap-task-tab">
                    <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/asap/task_1.JPG') !!}" alt="">
                    <p class="mb-5">ASAP (ALDI Store Application) was created out of the desire to help Store Management to execute bulletin information and ensure compliance within stores. It was designed to create a more intuitive 'just-in-time' communication between the Region and Stores and enable Store Management to be efficient and stay on top of the ever-growing need for compliance and accuracy. 
                    <br>
                    <br>ASAP is a web-based application for iPads which incorporates all information, previously sent to stores via the purchasing bulletins and attachments. Furthermore, it is capable of handling the product withdrawal procedure, displaying spaceman merchandising planograms and completing store specific compliance forms. Besides the objective to improve execution and streamline communication in stores, the ALDI typical characteristics of accountability and being responsible for action were incorporated into ASAP. 
                    </p>
                    <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/asap/task_2.JPG') !!}" alt="">
                </div>
                <div class="tab-pane fade" id="asap-form" role="tabpanel" aria-labelledby="asap-form-tab">
                    <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/asap/compliance_1.JPG') !!}" alt="">
                    <p class="mb-5">Compliance Tasks are a group of forms and checklists built by MindAtlas based on ALDI’s business requirements. Unlike Bulletin Task, Recurring Task and EPW, Compliance Tasks will be generated automatically for Store Managers without efforts from Regional Managers or Area Managers. 
                    <br>
                    <br>Besides, every checklist allows Store Manager to save before submitting, which gives SMs more flexibility on time management. Compliance Tasks can NOT be “overdue”. If a Compliance Task is not submitted before the due day, it will be marked with a dash ( - ).
                    <br>
                    <br>In the current system, Compliance Task will be audited and displayed on a Compliance Calendar. There are 5 basic Compliance Tasks. 
                    </p>
                    <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/asap/compliance_2.JPG') !!}" alt="">
                </div>
                <div class="tab-pane fade" id="asap-print" role="tabpanel" aria-labelledby="asap-print-tab">
                    <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/asap/printing_1.JPG') !!}" alt="">
                    <p class="mb-5">ASAP allows Store Manager to print price card labels based on their daily tasks or searched by product code. After a single click, ASAP will use APIs from Printer Cloud Web Service to send all price card data in JSON.
                    <br>
                    <br>Price cards can be printed correctly based on Store Location, Date, Product Type and other necessary factors.<br>
                    <br>Previouly, ALDI had to print price cards in the regional head office and delivered to every store. Now, the print function has totally changed the way of their business. That's the reason why it has become the most important function in ASAP since 2018.  
                    </p>
                    <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/asap/printing_2.png') !!}" alt="">
                </div>
                <div class="tab-pane fade" id="asap-pcp" role="tabpanel" aria-labelledby="asap-pcp-tab">
                    <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/asap/pcp_1.JPG') !!}" alt="">
                    <p class="mb-5">Daily tasks, compliance, product withdrawals, merchandising plans and library functions are going to be handled by the internal Store Task Management solution (STM).
ASAP will become a Price Card Printing application in 2020.
<br>
                    <br>With the opportunity to reduce weight of the app, I upgraded the app with better DB structure and faster think logic on key functions. Most UI were reforged with Bootstrap 4 standard classes.  CakePHP was updated to the latest version which style was simular with Laravel.<br>
                    <br>Although ASAP may only remain its print functions in the future, the reliability of the app has achieved the next level.
                </p>
                    <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/asap/pcp_2.png') !!}" alt="">
                </div>
            </div>
            <a class="btn btn-secondary btn-lg mr-2 mb-3 rounded-pill" href="https://aldiappstore.mindatlas.com/login/5010726" target="_blank">
                Live ASAP Demo (Store Manager)</a>
            <span class="">Login user: test5010726  Password: Password@8</span>
            <a class="btn btn-secondary btn-lg mr-2 mb-3 rounded-pill" href="https://aldipcpstore-s.mindatlas.com/" target="_blank">
              Live PCP Demo (Store Manager)</a>
            <span class="">Login store no#: 5010009  Password: Password@2</span>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-printer-cloud">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Cloud Web Service</h2>
            <span class="badge badge-success">Java</span>
            <span class="badge badge-success">JSP</span>
            <span class="badge badge-success">Spring</span>
            <span class="badge badge-success">AdminLTE</span>
            <span class="badge badge-success">Maven</span>
            <span class="badge badge-success">RESTful</span>
            <span class="badge badge-success">JSON</span>
            <span class="badge badge-success">Tomcat</span>
            <span class="badge badge-success">Websocket</span>
            <span class="badge badge-success">ZPL</span>
            <span class="badge badge-success">Git</span>
            <hr class="mb-5">
            <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/printer_cloud/printer_1.jpg') !!}" alt="">
            <p class="mb-5"> Cloud Printer is a cloud web service based on JSP and Tomcat libraries. The main purpose of cloud web service is to connect multiple printers with ASAP via Internet. Through the Cloud, price card data will be combined with different price card templates and sent to the correct printer to print. Any errors or responses from the printer will also return to users on ASAP. The following diagram indicates the connection between printers and ASAP.</p>
            <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/printer_cloud/printer_2.png') !!}" alt="">
            <a class="btn btn-secondary btn-lg mr-2 rounded-pill" href="http://aldicloud.mindatlas.com:8080/MindAtlasCloud/" target="_blank">
              Live Demo</a>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close</a>
            <p class="">Login Username: test5010726  Password: Password@8</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-ticbox">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Ticbox</h2>
            <span class="badge badge-success">Laravel</span>
            <span class="badge badge-success">Bootstrap</span>
            <span class="badge badge-success">MySQL</span>
            <span class="badge badge-success">jQuery</span>
            <span class="badge badge-success">Git</span>
            <hr class="mb-5">
            <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/ticbox/ticbox_1.JPG') !!}" alt="">
            <p class="mb-5">Ticbox is a web application for business owners to manage their workplace policies and procedures. Employers use their admin account to create and edit policy with templates. Based on the hierarchy of the company, employees are required to review and sign policy within their own user group. I was a part of the Ticbox development team and my main duty was to implement a policy editor with JavaScript. I also implemented some UI designs in the front-end. </p>
            <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/ticbox/ticbox_2.JPG') !!}" alt="">
            <a class="btn btn-secondary btn-lg mr-2 rounded-pill" href="https://ticbox.com.au/" target="_blank">
              Live Demo</a>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close</a>
            <p class="">Login Company: mindatlas Username: admin@ticbox.com.au  Password: Welcome2018!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-intuitiontuition">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Intuition Tuition - VCE Tutors</h2>
            <span class="badge badge-success">AWS</span>
            <span class="badge badge-success">Wordpress</span>
            <span class="badge badge-success">Bootstrap</span>
            <span class="badge badge-success">JavaScript</span>
            <span class="badge badge-success">Git</span>
            <span class="badge badge-success">Invision</span>
            <hr class="mb-5">
            <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/intuitiontuition/intuitiontuition_1.jpg') !!}" alt="">
            <p class="mb-5">Intuition Tuition is a young company providing tutorials for VCE. I helped them to build their website and pricing system by using Wordpress and JavaScript. From scoping, pricing, signing off designs, website development to final test, I used everything I learnt and acted like a perfessional developer.</p>
            <a class="btn btn-secondary btn-lg mr-2 rounded-pill" href="http://intuitiontuition.com.au" target="_blank">
              Live Demo</a>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-therightnutrition">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">The Right Nutrition</h2>
            <span class="badge badge-success">WIX</span>
            <span class="badge badge-success">Bootstrap</span>
            <span class="badge badge-success">Google APIs</span>
            <span class="badge badge-success">CSS</span>
            <span class="badge badge-success">SEO</span>
            <hr class="mb-5">
            <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/therightnutrition/therightnutrition_1.jpg') !!}" alt="">
            <p class="mb-5">To try new techniques for building a website, using WIX gave me a lot of fun and new experience on react website editor. In my freelancing experience, most clients wanted a reliable and powerful platform to build their websites or web apps with minimum cost. In this case, Laravel or Node.js seemed too powerful and required significant time on testing. A platform like WIX actually can save a great amount of time and help clients focus on design and marketing.</p>
            <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/therightnutrition/therightnutrition_2.jpg') !!}" alt="">
            <a class="btn btn-secondary btn-lg mr-2 rounded-pill" href="https://www.therightnutrition.net/" target="_blank">
              Live Demo</a>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 6 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-portfolio">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">My Portfolio Webpage</h2>
            <span class="badge badge-success">AWS</span>
            <span class="badge badge-success">Laravel</span>
            <span class="badge badge-success">Bootstrap</span>
            <span class="badge badge-success">JavaScript</span>
            <span class="badge badge-success">Html + CSS</span>
            <span class="badge badge-success">Laravel/Theme</span>
            <span class="badge badge-success">Laravel/Module</span>
            <hr class="mb-5">
            <img class="img-fluid mb-5" src="{!! URL::asset('img/portfolio/portfolio/portfolio_front.jpg') !!}" alt="">
            <p class="mb-5">A simple personal portfolio for demo and interviews. A few development techniques are used in the back-end of this website, like Laravel theme and module. These techniques make development and maintenance a lot easier for any large web application. </p>
            <a class="btn btn-secondary btn-lg mr-2 rounded-pill" href="https://github.com/hugochen123/hugochenportfolio/tree/develop" target="_blank">
              Find Code in Github</a>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop