<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=".\css\main.css">
  <link rel="stylesheet" href=".\css\style.css" />
  <title>Techmets</title>
  <link rel="icon" href="https://www.smarttech.com/-/media/project/smart/www/education/homepage/english-uk/edtech-assessment-tool-logo-network-background.jpg?h=800&iar=0&w=800&rev=480248468a3a441b9198852c8ca9255c&hash=31F35DEE3ADF95DEF84ACCADB4103CCC" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/46b7ceee20.js" crossorigin="anonymous"></script>
</head>

<body>
  <form action="#" method="POST">
    <div class="nav">
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <div class="nav__link hide">
        <b><a href="index.html" class="logo">Techmets</a></b>
        <a href="#">Home</a>
        <a href="#course">Courses</a>
        <a href="#about">About</a>
        <button type="submit" name="sub" class="button" id="form-open"><a href="logout.php">Log-out</a></button>
      </div>
    </div>
  </form>
  <br>

  <main class="containe">
    <center>
      <img src="https://www.inspirisys.com/images/practices-overview/header-practice-overview.jpg" class="head-img" alt="">
    </center>
  </main><br><br><br>
  <!-- courses -->

  <div id="course"></div>
  <br><br><br><br><br>

  <!-- search bar -->

  <center>

    <form class="form">
      <input class="input" type="search" id="searchInput" placeholder="Search" aria-label="Search">
      <button class="btn" type="submit">Search</button>
    </form>
    <ul id="searchResults"></ul>

  </center>

  <br><br><br><br><br><br>
  <center>
    <h1><b>Welcome to EdTech acadamy</b></h1>
    <h4><i>We have the professional courses provide for Student's.</i></h4>
  </center>
  <br><br><br><br><br>
  <section id="course" class="articles">
    <article>
    <?php
          
          require './connection.php';
          $query = "SELECT * FROM product";
          $query_run = mysqli_query($con,$query);
          $check = mysqli_num_rows($query_run);

          if($check)
          {
              while($row =  mysqli_fetch_assoc($query_run))
              {
              
                ?>
           
      <div class="article-wrapper">
        <figure>
          <img
            src="./course_admin_panel/<?php echo $row['product_image'];?>"
            alt="" />
        </figure>
        <div class="article-body">
          <h2><?php echo $row['product_name'];?></h2>
          <p>
          <?php echo $row['product_desc'];?>
          </p><br>
          <a href="./assets/c.php" class="read-more">
            Enroll now <span class="sr-only"></span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a><br><br>
          <h3><b>&#x20b9;<?php echo $row['price'];?></b></h3>
        </div>
      </div>
    </article>
    <article>
    <?php
              }

          }
          else
          {

          }
          ?>
      

      <!-- <div class="article-wrapper">
        <figure>
          <img src="https://www.filepicker.io/api/file/tAmaQ8bNSUeOS8SJJBfL" alt="" />
        </figure>
        <div class="article-body">
          <h2>C#</h2>
          <p>
            C# is a modern, object-oriented programming language developed by Microsoft. It's widely used for building a
            variety of applications, including desktop, web, and mobile apps, thanks to its robust features and
            integration with the .NET framework.
          </p>
          <a href="./assets/Chash.html" class="read-more">
            Enroll now <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <br><br>
          <h3><b>&#x20b9;1,999</b></h3>
        </div>
      </div>
    </article>
    <article>

      <div class="article-wrapper">
        <figure>
          <img
            src="https://paidcoursesforfree.com/wp-content/uploads/2019/08/C-Development-Tutorial-Series-%E2%80%93-The-Complete-Coding-Guide.jpg"
            alt="" />
        </figure>
        <div class="article-body">
          <h2>C++</h2>
          <p>
            C++ is a powerful, object-oriented programming language renowned for its performance and versatility. It
            extends the C programming language with features like classes and inheritance, making it suitable for
            developing complex software systems, games, and high-performance applications.
          </p>
          <a href="./assets/cpp.html" class="read-more">
            Enroll now<span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <br><br>
          <h3><b>&#x20b9;4,990</b></h3>
        </div>
      </div>
    </article>
  </section>
  <br>
  <section class="articles">
    <article>
      <div class="article-wrapper">
        <figure>
          <img src="https://gamedevacademy.org/wp-content/uploads/2015/10/static1.squarespace.com_.jpg" alt="" />
        </figure>
        <div class="article-body">
          <h2>Java</h2>
          <p>
            Java is a versatile, object-oriented programming language known for its portability and ease of use. It's
            widely used for developing enterprise-level applications, web servers, and Android mobile apps due to its
            platform independence and extensive standard library.
          </p>
          <a href="./assets/java.html" class="read-more">
            Enroll now<span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <br><br>
          <h3><b>&#x20b9;4,999</b></h3>
        </div>
      </div>
    </article>
    <article>

      <div class="article-wrapper">
        <figure>
          <img src="https://vijaycomputeracademy.com/wp-content/uploads/2021/12/html-css-js.jpg" alt="" />
        </figure>
        <div class="article-body">
          <h2>Web Development</h2>
          <p>
            Web development encompasses building websites and web applications using HTML, CSS, and JavaScript for the
            front end, and server-side technologies like Node.js for the back end, enabling the creation
            of dynamic and interactive online experiences.
          </p>
          <a href="./assets/web.html" class="read-more">
            Enroll now <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <br><br>
          <h3><b>&#x20b9;3,000</b></h3>
        </div>
      </div>
    </article>
    <article>

      <div class="article-wrapper">
        <figure>
          <img
            src="https://img.freepik.com/premium-photo/future-artificial-intelligence-robot-cyborg_31965-5211.jpg?w=740"
            alt="" />
        </figure>
        <div class="article-body">
          <h2>AI</h2>
          <p>
            AI, or Artificial Intelligence, refers to systems and algorithms designed to imitate human intelligence,
            enabling tasks like problem-solving and decision-making. It encompasses machine learning, natural language
            processing, and computer vision, driving automation and personalized user experiences.
          </p>
          <a href="./assets/ai.html" class="read-more">
            Enroll now <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <br><br>
          <h3><b>&#x20b9;6,999</b></h3>
        </div>
      </div>
    </article>
  </section>
  <br>
  <section class="articles">
    <article>
      <div class="article-wrapper">
        <figure>
          <img src="https://miu.edu.ng/wp-content/uploads/2021/06/cyber-security-tips-for-smbs-940x588-1.jpg" alt="" />
        </figure>
        <div class="article-body">
          <h2>Cyber Security</h2>
          <p>
            Cyber security involves protecting computer systems, networks, and data from unauthorized access, attacks,
            and breaches. It encompasses various practices such as encryption, intrusion detection, and risk management
            to safeguard digital assets and ensure the confidentiality, integrity, and availability of information.
          </p>
          <a href="./assets/cybersec.html" class="read-more">
            Enroll now <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <br><br>
          <h3><b>&#x20b9;7,999</b></h3>
        </div>
      </div>
    </article>
    <article>

      <div class="article-wrapper">
        <figure>
          <img
            src="https://i0.wp.com/webvars.com/wp-content/uploads/2017/05/5803378710_7ed56c893e_o.jpg?resize=1920%2C1200"
            alt="" />
        </figure>
        <div class="article-body">
          <h2>PhP</h2>
          <p>
            PHP is a server-side scripting language used for web development, enabling dynamic web page creation and
            database interaction within HTML. Its simplicity and large community support make it popular for building
            websites and web applications.
          </p>
          <a href="./assets/php.html" class="read-more">
            Enroll now <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <br><br>
          <h3><b>&#x20b9;3,500</b></h3>
        </div>
      </div>
    </article>
    <article>

      <div class="article-wrapper">
        <figure>
          <img src="https://th.bing.com/th/id/OIP.c5TMgljZ5EODDlN_0HoioQHaFj?rs=1&pid=ImgDetMain" alt="" />
        </figure>
        <div class="article-body">
          <h2>Python</h2>
          <p>
            Python is a versatile, high-level programming language valued for its simplicity and readability. It boasts
            a rich ecosystem of libraries and frameworks, making it popular for web development, data analysis, machine
            learning, and automation tasks.
          </p>
          <a href="./assets/python.html" class="read-more">
            Enroll now <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <br><br>
          <h3><b>&#x20b9;3,009</b></h3>
        </div>
      </div>
    </article>
  </section>

  <main id="about">
    <div class="responsive-container-block bigContainer">
      <div class="responsive-container-block Container">
        <p class="text-blk heading">
          About Us
        </p>
        <p class="text-blk subHeading">
          As of my last update, there isn't a widely recognized platform or institution called "Ed Tech Academy" that I
          can provide information on. However, "Ed Tech" generally refers to educational technology, and "academy" often
          denotes an educational institution or learning platform.
          <br><br>
          If you're referring to a specific academy or platform, please provide more details, and I'll do my best to
          assist you further.
        </p>
      </div>
  </main> -->
  <!-- footer -->

  <!-- <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">
          <h4><b>EdTech acadamy</b></h4>
        </div>
        <div class="footer-links">
          <ul class="footer-menu">
            <li><a href="#">number:- +91 9284221465</a></li>
            <li><a href="#">email:-ykapure98@gmail.com</a></li>
            <li><a href="#"><br>address:- Malegaon camp, Nashik.</a></li>
          </ul>
        </div>
      </div><br>
      <div class="footer-bottom">
        <p>&copy; 2024 EdTech acadamy. All rights reserved.</p>
      </div>
    </div>
  </footer> -->
</body>
<script>
  const courses = ["C language", "C#", "C++", "Python", "AI", "Java", "Web Devlopment", "PHP", "Cyber Security"];

  const form = document.querySelector('.form');
  const searchInput = document.getElementById('searchInput');
  const searchResults = document.getElementById('searchResults');

  form.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission

    const searchTerm = searchInput.value.toLowerCase();

    // Clear previous search results
    searchResults.innerHTML = '';

    // Filter courses based on the search term
    const filteredCourses = courses.filter(course => course.toLowerCase().includes(searchTerm));

    // Display search results
    if (filteredCourses.length > 0) {
      filteredCourses.forEach(course => {
        const listItem = document.createElement('li');
        listItem.textContent = course;
        listItem.addEventListener('click', function () {
          // Scroll to the clicked item
          listItem.scrollIntoView({ behavior: 'smooth' });
        });
        searchResults.appendChild(listItem);
      });
    } else {
      const noResultItem = document.createElement('li');
      noResultItem.textContent = 'No matching courses found.';
      searchResults.appendChild(noResultItem);
    }
  });

</script>

</html>