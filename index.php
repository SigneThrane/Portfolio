<?php get_header(); ?>
        <section>
             <div class="card-container">
               <div class="front"><img src="<?php the_field('front_picture'); ?>"width="1500" height="500" alt="" /> </div>
             </div>

             <div class="card-container-1">
                 <div class="pic1"><img src="<?php the_field('front_billede'); ?>" alt="" /></div>
                 <div class="text1">
                    <p class="section-3" id="section-3">Resume</p>
                    <p>
                   Hej mit navn er Signe Thrane!
                   Jeg går på Erhversakadamiet i Esbjerg, hvor jeg læser til multiemediedesigner.
                   <br>
                   Her har jeg lært UX/UI, project management, kodning og at arbejde med forskellige 
                   <br>
                   adobe programmer som: Illustator, XD, Photoshop, Indesign, After effects og premiere.
                    </p>
                    <a href="/cv/CV.jpg" download class="download-btn">Download CV</a>
                 </div>
             </div>

             <div class="card-container-2">
                 <div class="yt">  
                     <iframe width="670" height="450" 
                    src="https://www.youtube.com/embed/nXLhQ2lw1Dw" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
                </div>
                <div class="pic1"><img src="<?php the_field('video_cv'); ?>"/></div>
              </div>

              <div class="o2">
                <p id="section-1">Portfolio</p>
              </div>
              
              <div class="card-container-3">
                  <div class="p1"><img src="<?php the_field('esbjerg_party'); ?>" alt=""/></div>
                  <div class="p2"><img src="<?php the_field('halloween_party'); ?>" alt=""></div>
                  <div class="p3"><img src="<?php the_field('tour_de_france'); ?>" alt=""></div>
              </div>
            

              <div class="card-container-7">
                <div class="te1">
                    <h4>Esbjerg Street Party</h4>
                    <p>Lavet i projekt angående Esbjerg rebranding</p>
                </div>
                <div class="te2">
                    <h4>EASV Halloween party</h4>
                    <p>Lavet i projekt anledende af EASV Halloween fest.</p>
                </div>
                <div class="te3">
                    <h4>Tour De France 2022</h4>
                    <p>Sendt ind til konkurrence om tour de france poster 2022</p>
                </div>
              </div>

              <div class="card-container-4">
                <div class="p4"><img src="<?php the_field('oms_hjemmeside'); ?>" alt=""></div>
                <div class="p5"><img src="<?php the_field('trapholt_hjemmeside'); ?>" alt=""></div>
            </div>
            <div class="card-container-8">
                <div class="te4">
                    <h4>OMC</h4>
                    <p>Projekt lavet til D&D klasse.</p>
                </div>
                <div class="te5">
                    <h4>Trapholt</h4>
                    <p>1.semester eksamnen om Trapholt</p>
                </div>
              </div> 
            <div class="o3">
                <p id="section-4">Artwork</p>
              </div>

            <div class="card-container-5">
                <div class="ar1"><img src="<?php the_field('artwork_1'); ?>" alt=""></div>
                <div class="ar2"><img src="<?php the_field('artwork_2'); ?>" alt=""></div>
                <div class="ar3"><img src="<?php the_field('artwork_3'); ?>" alt=""></div>
            </div>  
        </section>
        <?php get_footer(); ?>