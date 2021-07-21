<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="resources/style.css">
    <title>Evelyn Cates</title>
</head>
<body>
    <div class="header">
        <div class="container">
            <h2 class="logo"><a href="index.html"></a>ETC</h2>
            <nav>
                <ul>
                    <li><a href="#" target=>About Me</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#articles">Contact</a></li>
                    <li><a href="#">Resume</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class='wrapper' id="about-wrapper">
        <div class="about" id="about">
            <h2>Hello  &#128075</h2>
            <h2>My name is <span>Evelyn</span></h2>
            <h3>and my work is at the intersection of data science and world questions.</h3>
            <div class="links">
                <div class="div links">
                    <a href="https://github.com/evelyntc" target=_blank><button>Github</button></a>
                    <a href="https://evelyntc.medium.com/" target=_blank><button>Medium</button></a>
                    <a href="https://www.linkedin.com/in/evelyn-cates-140285166" target=_blank><button>Linkedin</button></a>
                    <!--<a href="#"><button>Other</button></a>-->
                </div>
            </div>
        </div>
    </div>

    <div class="projects-wrapper" id="projects">
        <h2>Projects</h2>
        <div class="projects" >
            <div class="split">
                <h3><span>Exploratory Data Analysis in R</span></h3>
                <p> Understanding NYC recycling rates.</p>
                <img src="resources/images/trash_404x311.jpg" alt="">
            </div>
            <div class="split">
                <h3><span>Web Scraping</span></h3>
                <p>Scraping global air pollution data from multiple sites.</p>
                <img src="resources/images/air_pollution_404x311.jpg" alt="">
            </div>
            <div class="split">
                <h3><span>Supervised Text Classifier</span></h3>
                <p> Creating a word cloud from positive and negative IMDB reviews.</p>
                <img src="resources/images/proj_pic_txt_classification_404x311.jpg" alt="">
            </div>
            <div class="split">
                <h3><span>Fetal Health Classification</span></h3>
                <p> Using Classification methods to accurately predict fetal health.</p>
                <img src="resources/images/fetal_health_404x311.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="articles-wrapper" id="articles">
        <h2>Latest Articles</h2>
        <div class="articles" \>
            <div class="cards">
                <div class="card">
                    <div class="content">
                        <a href="https://medium.com/nerd-for-tech/beginners-guide-to-pandas-dataframe-cleaning-8712a6e3e63a" target=_blank>
                            <h3><span>Beginner's Guide</span></h3>
                            <p>Beginner's Guide to Pandas DataFrame Cleaning</p>
                            <span>23 June 2021</span>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <a href="https://medium.com/nerd-for-tech/commercial-aviation-safety-7e0212c5afc2" target=_blank>
                            <h3><span>Comercial Aviation Safety</span></h3>
                            <p>Airline transportation is safe, but media coverage is inaccurate</p>
                            <span>07 May 2021</span>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <a href="https://towardsdatascience.com/becoming-a-data-scientist-is-a-marathon-not-a-sprint-f85b214304e5" target=_blank>
                            <h3><span>Becoming a Data Scientist</span></h3>
                            <p>Becoming a Data Scientist is a Marathon, Not a Sprint</p>
                            <span>31 August 2020</span>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <a href="https://medium.com/analytics-vidhya/beginners-guide-to-r-markdown-5437cc85685f" target=_blank>
                            <h3><span>Beginner's Guide to R Markdown</span></h3>
                            <p>Create a professional report without added stress</p>
                            <span>16 December 2019</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form">
        <h2>Contact Me</h2>
        <form id="contact-form" method="POST" action="https://formsubmit.co/derrickcates@icloud.com">
            <input type="text" name = "name" class = "form-control" placeholder="Your Name" required>
            <br>
            <input type="text" name = "email" class = "form-control" placeholder="Your Email" required>
            <br>
            <textarea name="message" class="form-control" placeholder="Message" rows="5" required></textarea>
            <br>
            <input type="submit" class="form-control submit" value="SEND MESSAGE">
        </form>
    </div>
</body>
</html>
<!-- -->
