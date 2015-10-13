@extends('layouts.frontend')

@section('contenido_body')

  <!-- banner -->
  <section id="banner" class="inner-b"> <img src="images/404_01.png" alt=""/> </section>
  <!-- Content -->
  <section class="content-holder1 inner-pages">
    <section class="container">
      <section class="help-holder">
        <article class="left">
          <h2> <span class="txt-left">Protected: Password: def45</span> <span class="bg-right"></span> </h2>
          <p>Quisque dapibus tellus vitae mauris commodo vel facilisis tortor pretium. Maecenas eget dui vel diam congue lacinia. Etiam euismod aliquam vestibulum. Nunc id orci eu metus facilisis gravida vitae sit amet felis. Maecenas euismod blandit tristique. Integer eu eleifend mi. Mauris vel est enim. Morbi convallis, nisi sit amet viverra mattis, lorem mi semper dolor, ut eleifend nunc felis rutrum risus. Nunc sagittis purus eu ipsum accumsan eu sodales lectus venenatis. Nunc in neque eget arcu pretium consequat. Donec vehicula eleifend tempor.</p>
          <p>Praesent consequat dignissim nulla, a vehicula justo elementum sit amet. Donec pharetra congue odio, ac egestas dui venenatis et. Donec nec enim turpis, vel porta dolor.Fusce vestibulum, quam vitae rutrum tempus, turpis velit tincidunt arcu, quis porttitor lorem sapien non eros. Nullam rhoncus aliquam laoreet. Donec quis ligula enim, eget pretium tortor.</p>
          <h2>Leave a Comment</h2>
          <form action="form.php" method="post">
            <ul class="comm-list">
              <li>
                <label>Your Name...</label>
                <input name="name" id="name" type="text" class="comm-field">
              </li>
              <li>
                <label>Your Email...</label>
                <input name="email" id="email" type="text" class="comm-field">
              </li>
              <li>
                <label>Your Website...</label>
                <input name="website" id="website" type="text" class="comm-field">
              </li>
              <li>
                <label>Comment</label>
                <textarea name="comments" id="comments" cols="4" rows="20" class="comm-area"></textarea>
              </li>
              <li>
                <input name="" type="submit" class="send-btn" value="Submit">
              </li>
            </ul>
          </form>
        </article>
      </section>
    </section>
  </section>
  <section class="inner-f-top">
    <section class="container">
      <section class="top">
        <section class="row-fluid">
          <figure class="span3">
            <h2>From The Gallery</h2>
            <ul class="gallery-list">
              <li> <a href="#"> <img src="images/image11.jpg" alt=""/> </a> </li>
              <li> <a href="#"> <img src="images/image12.jpg" alt=""/> </a> </li>
              <li> <a href="#"> <img src="images/image11.jpg" alt=""/> </a> </li>
              <li> <a href="#"> <img src="images/image13.jpg" alt=""/> </a> </li>
              <li> <a href="#"> <img src="images/image14.jpg" alt=""/> </a> </li>
              <li> <a href="#"> <img src="images/image13.jpg" alt=""/> </a> </li>
              <li> <a href="#"> <img src="images/image15.jpg" alt=""/> </a> </li>
              <li> <a href="#"> <img src="images/image16.jpg" alt=""/> </a> </li>
              <li> <a href="#"> <img src="images/image15.jpg" alt=""/> </a> </li>
            </ul>
            <a href="#" class="more-btn2">+ View More</a> </figure>
          <figure class="span3">
            <h2>Our Team</h2>
            <div class="author-img-holder"> <a href="#"> <img src="images/image17.jpg" class="author-img" alt=""/> </a> <strong class="author-name">John Orange</strong> <em>CEO</em> <span>37 years old</span> </div>
            <p>Pellentesque euismod egestas massa, ac vehicula nunc tristique quis. Donec sollicitudin, diam eu vestibulum adipiimperdiet ultricies. <br>
              Dignissim, ante sit amet imperdiet ultricies, felis enim luctus leo, et cursus leo libero in nisi. Donec sit amet ipsum velit, a faucibus purus.</p>
          </figure>
          <figure class="span3 b-post">
            <h2>Latest Blog Post</h2>
            <div class="f-img-holder"> <a href="#"> <img src="images/image18.jpg" class="f-blog-img" alt=""/> </a> <span class="p-date">22 <br>
              May</span> </div>
            <p>Maecenas laoreet lectus est, eget ultricies eros. Aliquam ipsum nunc, tincidunt non fringilla.Maecenas laoreet lectus est, eget ultricies eros. Aliquam ipsum nunc, tincidunt non fringilla.</p>
            <a href="#" class="more-btn2">+ Read More</a> </figure>
          <figure class="span3">
            <h2>Contact Us</h2>
            <form action="form.php" method="post">
              <input name="name" id="name" type="text" class="f-field" value="Name">
              <input name="email" id="email" type="text" class="f-field" value="Email">
              <textarea name="comments" id="comments" cols="4" rows="20" class="f-area">Message</textarea>
              <input name="" type="submit" class="send-btn" value="Send">
            </form>
          </figure>
        </section>
      </section>
    </section>
  </section>

@stop