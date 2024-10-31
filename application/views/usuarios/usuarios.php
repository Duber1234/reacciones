<style type="text/css">
    .divs_frame{
        width: 100%;
        height: 440px;
    }
    
    .imgs_pelis{
        cursor: pointer;
        box-shadow: 0px 7px 17px rgba(5,5,5,5);

    }
    .divs_videos{
        width: 100%;
        height: 100%;
        display: none;
        cursor: pointer;
        box-shadow: 0px 7px 17px rgba(5,5,5,5);
    }
    .imgs_pelis:hover{
        cursor: pointer;
          box-shadow: 0px 17px 37px rgba(0, 0, 0, 1);
    }
    .divs_videos:hover{
          box-shadow: 0px 17px 37px rgba(0, 0, 0, 0.1);
    }
.video-container{
    /*margin-top: -7%;*/
}
    .pelicula {
  
  padding: 2px;
  
}

.pelicula h3 {
  
  font-weight: bold;
  color: red;
  background-color: black;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 10px;
  text-align: center;
   box-shadow: 0px 7px 17px rgba(5,5,5,5);
   white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  
}

.pelicula h6 {
 
  color: red;
  font-weight: normal;
  text-transform: uppercase;
  text-align: center;
  background-color: black;
  font-size: 70%;
  padding-top: 5px;
  padding-bottom: 5px;
  border-radius: 5px;
  margin-bottom: 10px;
   box-shadow: 0px 7px 17px rgba(5,5,5,5);
}
.descarga_apk{
    color: greenyellow;
    background-color: black;
    border-radius: 10px;
    padding: 5px;

}
.loader {
  border: 16px solid #f3f3f3; /* Color de borde */
  border-top: 16px solid #3498db; /* Color del círculo que gira */
  border-radius: 50%;
  width: 5px;
  height: 5px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
        <div class="main-wrapper pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="widget-area">
                            <!-- widget single item start -->
                            <div class="card card-profile widget-item p-0">
                                <div class="profile-banner">
                                    <figure class="profile-banner-small">
                                        <a href="<?=base_url().'usuarios/perfil'?>">
                                            <img src="<?=base_url()  ?>assets/images/banner/banner-small.jpg" alt="">
                                        </a>
                                        <a href="<?=base_url().'usuarios/perfil'?>" class="profile-thumb-2">
                                            <img src="<?=base_url()  ?>assets/images/profile/profile-midle-1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="profile-desc text-center">
                                        <h5 class="author"><a href="<?=base_url().'usuarios/perfil'?>">Usuario #<?=$_SESSION['user_var']->id ?></a></h5>
                                        <h4><?= $_SESSION['ip_user'] ?></h4>
                                        <h6 class="author"> <!--a href="https://drive.google.com/file/d/1MkE8N9TtMP96Tibbc1lt1R17MFZbsDWb/view?usp=sharing" style="color: green;">Descarga el apk <br> aqui <img class="emoji2" width="10%" src="<?= base_url()."assets/images/icons/androide.png" ?>"></a-->Bendiciones</h6>
                                        <p>Hay Vamos, Gracias a Dios </p>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item start -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">page you may like</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-1.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Travel The World</a></h3>
                                                <p class="list-subtitle"><a href="#">adventure</a></p>
                                            </div>
                                            <button class="like-button active">
                                                <img class="heart" src="<?=base_url()  ?>assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="<?=base_url()  ?>assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-10.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Foodcort Nirala</a></h3>
                                                <p class="list-subtitle"><a href="#">food</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="<?=base_url()  ?>assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="<?=base_url()  ?>assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-5.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                                <p class="list-subtitle"><a href="#">drama</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="<?=base_url()  ?>assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="<?=base_url()  ?>assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-4.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                                <p class="list-subtitle"><a href="#">fitness</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="<?=base_url()  ?>assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="<?=base_url()  ?>assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">latest top news</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-20.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">2 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-18.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">20 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-13.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">30 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-17.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">40 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-10.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">39 min ago</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget single item end -->
                        </aside>
                    </div>


                    <div class="col-lg-6 order-1 order-lg-2">
                        <!-- share box start -->
                       <?php /* ?> <div class="card card-small">
                            <div class="share-box-inner">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="<?=base_url()  ?>assets/images/profile/profile-small-37.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <!-- share content box start -->
                                <div class="share-content-box w-100">
                                    <form id="pl1" class="share-text-box" action="<?=base_url(); ?>usuarios/publicar1" method="post">
                                        <textarea  name="share" class="share-text-field" aria-disabled="true" placeholder="Link Paster" ></textarea>
                                        <button class="btn-share" type="submit">Publicar</button>

                                    </form>
                                </div><br>
                                <!-- share content box end -->

                                <!-- Modal start -->
                                <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Share Your Mood</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body custom-scroll">
                                                <textarea name="share" class="share-field-big custom-scroll" placeholder="Say Something"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="post-share-btn" data-bs-dismiss="modal">cancel</button>
                                                <button type="button" class="post-share-btn">post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div> <?php */ ?>
                        <!-- share box end -->
 <!-- inicio publicaciones -->
 <!--div class="pelicula card" style="text-align: center;padding-bottom: 10px; background-color: white;">
<h3 style="color: black;">Desarrollado por <a href="https://www.youtube.com/watch?v=hqMp1FZnYlg&list=PLyrPDNECcgnpcPIabXBpuGZVaOS67PLHW&index=1&ab_channel=DuberPesca"><b style="color: black;">Duber Pesca</b></a></h3>
<p>Tambien Conocido Como <a href="https://www.youtube.com/watch?v=wvdFE9JSAMY&list=PL8YsFrZWXqYq0PH_OK84xK01twy9k0xZG&ab_channel=Matrix777COL"><b>Matrix777Col</b></a></p>
</div-->
 <?php $i1=0;$i2=0; $id_ultimo=$lista_p[0]['id'];foreach ($lista_p as $key => $pl) {
    $url_emb=false;
    if(empty($pl['type'])){
        $url_emb=$this->welcome->convertir_a_embed($pl['texto']);
    }else if($pl['type']==1){
        $url_emb=true;
    }
if($url_emb!=false){
    if($i2==count($lista_patrocinadores_anuncios)){
        $i2=0;
    }
    $pl_patrocinador=$lista_patrocinadores_anuncios[$i2];
    $i2++
    ?>
     
 <div class="card video-iframe " data-id-iframe="<?=$pl['id']  ?>" data-id-publicacion="<?=$pl['id']  ?>">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="<?=base_url()  ?>assets/images/profile/profile-small-29.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="<?=base_url().'usuarios/perfil'?>"><?=$this->welcome->get_user_name($pl['usuario_publica']);  ?></a></h6>
                                    <span class="post-time"><?=$this->welcome->diferencia_m($pl['fecha']);  ?></span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?= ($key!=0)? '<br>':'' ?>
                            <!-- post title start -->
                            
                            <div class="post-content pelicula">
                                <?php if($i1==0){ ?>
                                    <p class="post-desc">
                                         <!--a class="descarga_apk" href="https://drive.google.com/file/d/1MkE8N9TtMP96Tibbc1lt1R17MFZbsDWb/view?usp=sharing" ><strong>Descarga el APK aqui</strong> <img class="emoji2" width="10%" src="<?= base_url()."assets/images/icons/androide.png" ?>"></a-->
                                    </p>
                                <?php } ?>
                                <?php if(empty($pl['type'])){ ?>
                                 <div class=""  >
                                <iframe data-view-ok="no" data-id-publicacion="<?=$pl['id'] ?>" id="video<?=$pl['id']  ?>" class="framesx divs_frame" src="<?=$url_emb ?>?enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;  web-share;"  allowfullscreen ></iframe>
                               
                                </div>
                            <?php }else{
                                $css_alto="";
                                if(strlen($pl['titulo'])>20){
                                    $css_alto='style="font-size: 90%;"';
                                }
                                ?>
                                <h3 <?=$css_alto ?>><?=$pl['titulo'] ?></h3>
                                <h6 id="genero<?=$pl['id'] ?>"><?=$pl['genero'] ?></h6>
                                
                                <?php $ruta_peli=$this->welcome->get_ruta_file(1,$pl['texto']) ; ?>

                                   <div style="width: 100%;" align="middle"> <a ><img id="poster<?=$pl['id'] ?>" class="imgs_pelis" src="<?=str_replace(".MP4","", $ruta_peli)  ?>.webp" data-temporalizador_play="false" data-url1="<?=$ruta_peli ?>" data-id-publicacion="<?=$pl['id'] ?>"></a><br>
                                    <small id="small_<?=$pl['id'] ?>" style="color:red"><b>Toca la imagen para reproducir </b><i class="bi bi-play-button"></i></small></div>
                                    <div class="video-container">
                                    <video  id="cinta<?=$pl['id'] ?>" class="divs_videos " data-id-publicacion="<?=$pl['id'] ?>">
                                  <source  type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                     <div id="video-bg<?=$pl['id']  ?>"></div>
                                    </div>
                                   
                                    <div style="width: 100%;display: none;" align="middle" id="small2_div_<?=$pl['id'] ?>">
                                        <progress style="width: 79%;" id="progress_small2<?=$pl['id'] ?>" value="1" max="100"></progress> <b style="width:10%" id="porcentaje_cargue<?=$pl['id'] ?>">1%</b>

                                    <small  id="small2_<?=$pl['id'] ?>" style="color:red"><b>Espera Un Momento Por Favor, Mientras Conectamos Con el Servidor </b><i class="bi bi-play-button"></i></small><div class="loader"></div></div>
                                    
                                 
                                    <!--div class="divs_videos">
                                    <div id="plyr-video2" >
                                    
                                    </div >
                                    </div-->
                                <?php } ?>
                                <div class="post-meta">
                                    <?php $reacciones_p=$this->welcome->get_reacciones($pl['id']); 
                                            $reaccione_us=$this->welcome->get_reaccione($pl['id']);
                                    ?>
                                    <button class="post-meta-like" data-id-publicacion="<?=$pl['id'] ?>">
                                        <i <?= (!empty($reaccione_us))?'style="color:red"':''  ?> class="bi bi-heart-beat" id="icono_reacciona-pl-<?=$pl['id'] ?>"></i>
                                        <span id="interezantes-span-pl-<?=$pl['id'] ?>"></span><small id="div-interezantes-span-pl-<?=$pl['id'] ?>"><?=$reacciones_p ?> Interezantes</small>
                                        
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>0</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <?php $vistas_p=$this->welcome->get_vistas($pl['id']); 
                                            
                                    ?>
                                                <i <?= ($vistas_p>0)?'style="color:red"':''  ?> class="bi bi-monitor" id="icono_view-pl-<?=$pl['id'] ?>"></i>
                                                    <span id="views-span-pl-<?=$pl['id'] ?>"></span><small id="div-views-span-pl-<?=$pl['id'] ?>"><?=$vistas_p ?></small>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card video-patrocinador" data-id-publicacion="<?=$pl_patrocinador['id']  ?>">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <h6>Patrocinador<h6>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                              <img src="<?=$this->welcome->get_ruta_file(2,$pl_patrocinador['texto']) ?>">
                                <div class="post-meta">
                                    <?php $reacciones_p=$this->welcome->get_reacciones($pl_patrocinador['id']); 
                                            $reaccione_us=$this->welcome->get_reaccione($pl_patrocinador['id']);
                                    ?>
                                    <button class="post-meta-like-p" data-id-publicacion="<?=$pl_patrocinador['id'] ?>">
                                        <i <?= (!empty($reaccione_us))?'style="color:red"':''  ?> class="bi bi-heart-beat icono_reacciona-pl-p-<?=$pl_patrocinador['id'] ?>" id="icono_reacciona-pl-p-<?=$pl_patrocinador['id'] ?>"></i>
                                        <span class="interezantes-span-pl-p-<?=$pl_patrocinador['id'] ?>" id="interezantes-span-pl-p-<?=$pl_patrocinador['id'] ?>"></span><small class="div-interezantes-span-pl-p-<?=$pl_patrocinador['id'] ?>" id="div-interezantes-span-pl-p-<?=$pl_patrocinador['id'] ?>"><?=$reacciones_p ?> Interezantes</small>
                                        
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>0</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <?php $vistas_p=$this->welcome->get_vistas($pl_patrocinador['id']); 
                                            
                                    ?>
                                                <i <?= ($vistas_p>0)?'style="color:red"':''  ?> class="bi bi-monitor icono_view-pl-p-<?=$pl_patrocinador['id'] ?>" id="icono_view-pl-p-<?=$pl_patrocinador['id'] ?>"></i>
                                                    <span  class="views-span-pl-p-<?=$pl_patrocinador['id']?>" id="views-span-pl-p-<?=$pl_patrocinador['id'] ?>"></span><small class="div-views-span-pl-p-<?=$pl_patrocinador['id']?>" id="div-views-span-pl-p-<?=$pl_patrocinador['id'] ?>"><?=$vistas_p ?></small>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php $i1++; }} ?>
                        
                        
                        

                    </div>

                    <div class="col-lg-3 order-3">
                        <aside class="widget-area">
                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Recent Notifications</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-9.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">5 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-8.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">10 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-7.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">18 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-6.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">25 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-4.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">39 min ago</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Advertizement</h4>
                                <div class="widget-body">
                                    <div class="add-thumb">
                                        <a href="#">
                                            <img src="<?=base_url()  ?>assets/images/banner/advertise.jpg" alt="advertisement">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Friends Zone</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-15.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Ammeya Jakson</a></h3>
                                                <p class="list-subtitle"><a href="#">10 mutual</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="<?=base_url()  ?>assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="<?=base_url()  ?>assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-18.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Jashon Muri</a></h3>
                                                <p class="list-subtitle"><a href="#">2 mutual</a></p>
                                            </div>
                                            <button class="like-button active">
                                                <img class="heart" src="<?=base_url()  ?>assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="<?=base_url()  ?>assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-14.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                                <p class="list-subtitle"><a href="#">drama</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="<?=base_url()  ?>assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="<?=base_url()  ?>assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?=base_url()  ?>assets/images/profile/profile-35x35-20.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                                <p class="list-subtitle"><a href="#">fitness</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="<?=base_url()  ?>assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="<?=base_url()  ?>assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget single item end -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>

<script>
    var inicia=false;
    var sw=false;
$(document).on("click",".post-meta-like",function (ev){
    var id_publicacion=$(this).data('id-publicacion');
   interezantes_mov(id_publicacion,1);
});
$(document).on("click",".post-meta-like-p",function (ev){
    var id_publicacion=$(this).data('id-publicacion');
       interezantes_mov(id_publicacion,2);
});

$(document).on("click",".imgs_pelis",function (ev){
    var id_publicacion=$(this).data('id-publicacion');
    var id_etiqueda_v="#cinta"+id_publicacion;
    var url=$(this).data('url1');
    var url_poster=$(this).attr('src');
     var cargada=$(id_etiqueda_v).attr('src');
     var alto=$(this).css('height');
     var etiqueta=this;
 $(id_etiqueda_v).css('background-color', 'black');
     $(this).data('temporalizador_play',"true");    
     
    
     $(id_etiqueda_v).css("height",alto);
     
     
     $("#small2_div_"+id_publicacion).css('display',"block");
$("#genero"+id_publicacion).css('display',"none");
     progress_avance(id_publicacion);
     
     
     if(cargada===undefined){
            $("#small_"+id_publicacion).remove();
            $(id_etiqueda_v)
              .attr("src",url)
              .on('loadeddata', function() {
                this.currentTime = 5;
                this.play();
                var idy1=$(this).data("id-publicacion");
                $("#poster"+idy1).css('display',"none");
                $(this).attr("controls",true);
                $(this).css('display',"block");
                $(this).data('temporalizador_play',"false");
                views_mov(this,1);
              });    
     }
    
});

function progress_avance(id_publicacion){
    setTimeout(function() {
            var prox=$("#progress_small2"+id_publicacion).val();
            //console.log(prox+"ss");
            prox++;
            $("#progress_small2"+id_publicacion).val(prox);
            $("#porcentaje_cargue"+id_publicacion).text(prox+"%")
            

           
            var sw1=false;
            if($(this).data('temporalizador_play')=="true" && prox>=100){
                    $("#progress_small2"+id_publicacion).val(20);
                    $("#porcentaje_cargue"+id_publicacion).text("20%");
                    $("#small2_div_"+id_publicacion).css('display',"block");
                    prox=20;
                    sw1=true;
            }

            if($(this).data('temporalizador_play')=="true" || prox<100){
                var x12=document.getElementById("cinta"+id_publicacion);
                //console.log(x12.currentTime);
                progress_avance(id_publicacion);
            }else if(sw1==false){
                $("#progress_small2"+id_publicacion).val(100);
                $("#porcentaje_cargue"+id_publicacion).text("100%");
                $("#small2_div_"+id_publicacion).css('display',"none");
                
            }
            
     }, 500);
}

function interezantes_mov(id_publicacion,type){
    
    if(type==1){
            $("#icono_reacciona-pl-"+id_publicacion).css("color","red");
    }else{
            $(".icono_reacciona-pl-p-"+id_publicacion).css("color","red");
    }
    $.post(baseurl+"usuarios/reaccionar",{"id_publicacion": id_publicacion,"id_reaccion":"1"},function(data){
        //console.log(data);
        if(type==1){
                    $("#interezantes-span-pl-"+id_publicacion).html("");
                    $("#div-interezantes-span-pl-"+id_publicacion).html(data.numero_iterezantes+" Interezantes");            
        }else{
                    $(".interezantes-span-pl-p-"+id_publicacion).html("");
            $(".div-interezantes-span-pl-p-"+id_publicacion).html(data.numero_iterezantes+" Interezantes");
        }



    },"json");
}
function views_mov(obj,tipo){
                    var id_publicacion=$(obj).data('id-publicacion');
                   
                    //console.log("yes"+id_publicacion);
                    
                 var view_ok=$(obj).data('view-ok');
                 //if(view_ok=="no"){
                        $.post(baseurl+"usuarios/views",{"id_publicacion": id_publicacion},function(data){
                             console.log(data);
                             $(obj).data('view-ok',"si");
                             if(tipo==1){
                                $("#views-span-pl-"+id_publicacion).html("");
                                $("#div-views-span-pl-"+id_publicacion).html(data.conteo);
                             }else{
                                $(".views-span-pl-p-"+id_publicacion).html("");
                                $(".div-views-span-pl-p-"+id_publicacion).html(data.conteo);
                             }
                                


                        },"json");
                 //}
            
}

/*const elementosConClase = document.querySelectorAll('.video-iframe');

// Iterar sobre cada elemento y crear un Waypoint
elementosConClase.forEach(elemento => {
  new Waypoint({
    element: elemento,
 offset: '50%', 
    handler: function() {
      views_mov(elemento,1)
      // Aquí coloca tu código para ejecutar cuando el elemento sea visible
      // Por ejemplo, mostrar un modal, iniciar una animación, etc.
      //elemento.classList.add('animacion'); // Agregar una clase para activar una animación
    }
  });
}); cuando cargue la pelicula se oasa esto 
*/
const elementosConClase2 = document.querySelectorAll('.video-patrocinador');

// Iterar sobre cada elemento y crear un Waypoint
elementosConClase2.forEach(elemento => {
  new Waypoint({
    element: elemento,
    offset: '100%', 
    handler: function() {
       
      views_mov(elemento,2)
      // Aquí coloca tu código para ejecutar cuando el elemento sea visible
      // Por ejemplo, mostrar un modal, iniciar una animación, etc.
      //elemento.classList.add('animacion'); // Agregar una clase para activar una animación
    }
  });
});
</script>