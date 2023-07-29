<?php 

?>
<header class=" sticky-top py-2 bg-light">
        <div class="container ">
            <nav class="navbar navbar-expand-lg  navbar-light bg-light">
                  <a class="navbar-brand " href="index.php"><img width="130px" src="imgs/LOGO12.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-justify  display-4"></i>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link text-primary <?php  if('Home' == $title){ echo 'active'; } ?>" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-primary <?php  if('About' == $title){ echo 'active'; } ?> " aria-current="page" href="about.php">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-primary <?php  if('News' == $title){ echo 'active'; } ?>" href="news.php">News</a>
                      </li>
                      <li class="nav-item text-primary <?php  if('Gallery' == $title){ echo 'active'; } ?>">
                        <a class="nav-link text-primary" href="galary.php">Gallery</a>
                      </li>
                      <li class="nav-item <?php  if('Contact' == $title){ echo 'active'; } ?>">
                        <a class="nav-link text-primary" href="contact.php">Contact</a>
                      </li>
                      <li class="nav-item mr-3 <?php  if('Event' == $title){ echo 'active'; } ?>">
                      <a href="event.php"  class="btn btn-primary  text-white position-relative" style="color:white !important">
                        Events
                        <span class="position-absolute  top-0 start-100 translate-middle badge rounded-pill bg-danger">
                          <?=$pdo->count_upcoming_events()?>
                          <span class="visually-hidden">unread messages</span>
                        </span>
                      </a>
                      </li>
                    </ul>
                  </div>
              </nav>
        </div>
    </header>