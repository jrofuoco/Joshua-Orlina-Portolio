<style>
    #about {
        min-height: 100vh;
        background: #fff;
        font-family: 'Helvetica Neue', Arial, sans-serif;
        color: #111;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 40px;
        position: relative;
    }
    
    #about > div {
        flex: 1;
        max-width: 1000px;
        position: relative;
        text-align: center;
    }
    
    #about h1 {
        font-size: 70px;
        margin: 0;
        font-weight: 300;
        line-height: 0.9;
        color: #111;
        text-transform: uppercase;
        letter-spacing: -2px;
    }
    
    #about .description {
        margin-top: 40px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    
    #about .description p {
        font-size: 16px;
        line-height: 1.6;
        color: #666;
        margin-bottom: 20px;
    }
    
    #about .description p:last-child {
        margin-bottom: 0;
    }
    
    @media(max-width: 1200px) {
        #about {
            padding: 0 40px !important;
        }
    }
    
    @media(max-width: 900px) {
        #about {
            flex-direction: column !important;
            text-align: center !important;
            padding: 40px 20px !important;
        }
        
        #about > div:first-child,
        #about > div:last-child {
            max-width: 100% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        
        #about h1 {
            font-size: 10px !important;
        }
        
        #about > div:first-child > div:first-child {
            justify-content: center !important;
            margin-left: 0 !important;
        }
        
        #about > div:last-child {
            height: auto !important;
            margin-top: 40px !important;
        }
        
        #about > div:last-child > div {
            height: 300px !important;
        }
    }
</style>

<section id="about">
    
    <div>
        <!-- Title -->
        <h1>About</h1>
        <!-- Description -->
        <div class="description">
            <p>
                Hi, I’m <strong>Joshua Orlina</strong> — a passionate Full Stack Developer dedicated to building
                efficient, user-focused digital experiences. I hold a Bachelor of Science in Information
                Technology, majoring in Software Development.
            </p>
            <p>
                My programming journey began in university, where I discovered my love for creating practical
                solutions through code. During my internship at <strong>Megaworld Corporation</strong>, I worked as a
                <strong> Junior Programmer</strong>, contributing to the development of their <em>Audit Portal</em> from the ground up
                using Laravel with Jetstream. This experience honed my backend and frontend skills, teamwork, and
                ability to build scalable web applications.
            </p>
            <p>
                Beyond my internship, I’ve developed projects such as the <em>Kids E Language Learning Game</em> — an
                engaging platform to help children learn English, and the <em>Gym Guide Application</em> — providing
                structured workout guidance for users. My technical toolkit includes PHP (Laravel), Java, JavaScript,
                MySQL, Supabase, and Roboflow for computer vision-powered features. I'am also familiar with Python and c++.
            </p>
            <p>
                I approach every project with a focus on clean, maintainable code, user-first design, and continuous
                learning. When I’m not coding, you’ll find me exploring new technologies, contributing to open-source
                projects, or sharing knowledge with the developer community.
            </p>
        </div>
    </div>

</section>
