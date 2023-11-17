@extends('layouts.main')
@section('content')

<blockquote class="blockquote text-center CVmainTitle  ">
    <p class="mb-0">CV</p>
    <br>
</blockquote>

<div class="border border-top-0 border-bottom-0 border-white rounded container-cv ">
    <br>
    <div class="d-flex flex-row">
        <div class="CV-leftside">
            <div class="CVTitle border border-top-0 border-bottom-0 border-white rounded  CV-item" >
                <div class="CVTitle-name">Andreev Pavel</div>
                <div class="CVTitle-job">Full stack developer</div>
            </div>
            
            <div class="CVData border border-top-0 border-bottom-0 border-white rounded d-flex CV-item" >
                <div class=" flex-row">
                    <div class="CVData-item">Email: deen70456@gmail </div>
                    <div class="CVData-item">Date of birth: 04/23/2007</div>
                </div>
                <div class=" flex-row">
                <div class="CVData-item">phone: +380 68 291 0355</div>
                    <div class="CVData-item">Email: Lysohirskyi descent 26, Kyiv</div></div>
            </div>
    
            <div class=" border border-top-0 border-bottom-0 border-white rounded  CV-item" >
                <div class="skils-title">Skills</div>
                <div class="skils-item">
                    <div class="skils-subtitle">Stack of technologies</div>
                    <div class="skils-data">C#, C++, C, PHP, Javascript, Java, Html, Css, Xml, Json, OOP, Pattern MVC, Jquery, React, Laravel, Ajax, NUnit, Sql, Doker.</div>
                    
                </div>
                <div class="skils-item">
                    <div class="skils-subtitle">Hard skills
                    </div>
                    <div class="skils-data">Queues, Cron-jobs, Unit-tests, Feature-tests, GIT, Database and SQL, Data structures and algorithms, SOLID knowledge</div>
                    
                </div>
                <div class="skils-item">
                    <div class="skils-subtitle">Soft skills</div>
                    <div class="skils-data">Communication, Teamwork, Problem-solving, Time management, Critical thinking,Decision-making, Organizational, Stress management</div>
                    
                </div>
            </div>
    
    
            <div class=" border border-top-0 border-bottom-0 border-white rounded CV-item" >
                <div class="experience-title">Work and major projects</div>
                <ul>
                    <li>
                        <div  class="experience-item">
                            <div  class="experience-subtitle">Sagittarius</div>
                            <div  class="experience-data">Since August 2023 <a href="https://github.com/AS-aan70456/Sagittarius">https://github.com/AS-aan70456/Sagittarius<a><br>
                                Sagittarius is a game engine based on the reycast algorithm,
                                Expanded pseudo-3D game engine, increased modularity of scenarios, and
                                Also external lighting, peripheral lighting RGBA, the engine works
                                according to the dynamic algorithm of plug-ins. </div>
                        </div>
                    </li>
                    <li>
                        <div  class="experience-item">
                            <div  class="experience-subtitle">aainCRM</div>
                            <div  class="experience-data">
                                С февраля 2022 г. <a href="https://github.com/AS-aan70456/MyCRM">https://github.com/AS-aan70456/MyCRM <a><br>
                                ainCRM — это просто crm-система, которая призвана вести обмен капиталом клиента,
                                Дополнение к разным ресурсам, по разным разделам, дает возможность
                                пересмотреть всю историю витрат, та вирочки.</div>
                        </div>
                    </li>
    
                  </ul>
            </div>
    
            <div class=" border border-top-0 border-bottom-0 border-white rounded  CV-item" >
                <div class="aboutme-title">About me</div>
                <div class="aboutme-data">I am a back-end developer with many projects on GitHub. My main programming
                    languages are c# c++, javascript, i can also program in java, python, php, c. In my
                    work, I often had to create optimal software specifically adapted for computers with
                    limited resources. I have experience in writing system architecture and maintaining
                    Legacy code. I enjoy working with large code bases, analyzing existing code and
                    improving it, ensuring the stability and functionality of the software product</div>
            </div>
    
        </div>
        
        <div class="CV-rightside">
            <div class=" border border-top-0 border-bottom-0 border-white rounded CV-sideitem" >
                <div class="Languages-title">Languages</div>
                <div class="Languages-data">
                    <div class="Languages-name">English</div>
                    <div class="Languages-stage">below average</div>
                </div>
                <div class="Languages-data">
                    <div class="Languages-name">Polish</div>
                    <div class="Languages-stage">Initial</div>
                </div>
                <div class="Languages-data">
                    <div class="Languages-name">Russian</div>
                    <div class="Languages-stage">Native</div>
                </div>
                <div class="Languages-data">
                    <div class="Languages-name">Ukrainian</div>
                    <div class="Languages-stage">Native</div>
                </div>
            </div>
        </div>
        
    </div>
    <br>
        <br>
</div>
<div class="border border-top-0 border-bottom-0 border-white rounded container-cv">
</div>


@endsection

@section('content')
@endsection

@section('nav')
<li class="nav-item">
  <a class="nav-link "  href="home">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link " href="projects">Projects</a>
</li>
<li class="nav-item">
  <a class="nav-link "  href="posts">Posts</a>
</li>

<li class="nav-item">
    <a class="nav-link " href="about">AboutMe</a>
</li>
<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="CV">CV</a>
</li>
@endsection