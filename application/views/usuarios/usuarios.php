<style type="text/css">
    .divs_frame{
        width: 100%;
        height: 440px;
    }
    .divs_videos{
        width: 100%;
        height: 380px;
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
                                        <h6 class="author"> <a href="https://drive.google.com/file/d/1MkE8N9TtMP96Tibbc1lt1R17MFZbsDWb/view?usp=sharing" style="color: green;">Descarga el apk <br> aqui</a></h6>
                                        <p>Hay Vamos, Gracias a Dios <img class="emoji1" src="<?= base_url()."assets/images/emojis/enojado2.png" ?>"></p>
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
                        <div class="card card-small">
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
                                        <textarea  name="share" class="share-text-field" aria-disabled="true" placeholder="Pega un enlace de Youtube / Paste a Youtube link" ></textarea>
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
                        </div>
                        <!-- share box end -->
 <!-- inicio publicaciones -->
<p>Desarrollado por <a href="https://www.youtube.com/watch?v=hqMp1FZnYlg&list=PLyrPDNECcgnpcPIabXBpuGZVaOS67PLHW&index=1&ab_channel=DuberPesca">Duber Pesca</a></p>
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
                            <!-- post title start -->
                            <div class="post-content">
                                <?php if($i1==0){ ?>
                                    <p class="post-desc">
                                         <a href="https://drive.google.com/file/d/1MkE8N9TtMP96Tibbc1lt1R17MFZbsDWb/view?usp=sharing" style="color: green;"><strong>Descarga el APK aqui</strong></a>
                                    </p>
                                <?php } ?>
                                <?php if(empty($pl['type'])){ ?>
                                 <div class=""  >
                                <iframe data-view-ok="no" data-id-publicacion="<?=$pl['id'] ?>" id="video<?=$pl['id']  ?>" class="framesx divs_frame" src="<?=$url_emb ?>?enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;  web-share;"  allowfullscreen ></iframe>
                               
                                </div>
                            <?php }else{?>
                                <h3><?=$pl['titulo'] ?></h1>
                                <h6><?=$pl['genero'] ?></h6>
                               <div class="plyr-video">
                                    <video controls  preload   class="divs_videos">
                                  <source src="<?=base_url() ?>/assets/PELICULAS/<?=$pl['texto'] ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    </div >
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
                                                <i <?= ($vistas_p>0)?'style="color:red"':''  ?> class="bi bi-play-button" id="icono_view-pl-<?=$pl['id'] ?>"></i>
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
                                Patrocinador
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                              
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
                                                <i <?= ($vistas_p>0)?'style="color:red"':''  ?> class="bi bi-play-button icono_view-pl-p-<?=$pl_patrocinador['id'] ?>" id="icono_view-pl-p-<?=$pl_patrocinador['id'] ?>"></i>
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
                   
                    console.log("yes"+id_publicacion);
                    
                 var view_ok=$(obj).data('view-ok');
                 //if(view_ok=="no"){
                        $.post(baseurl+"usuarios/views",{"id_publicacion": id_publicacion},function(data){
                             //console.log(data);
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
     // Función para reproducir el video
    function playVideo(iframe) {
        iframe[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
    }

    // Función para pausar el video
    function pauseVideo(iframe) {
        iframe[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
    }

    // Configurar el IntersectionObserver para detectar cuando el iframe es visible
   /* const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {console.log(entry.target.id);
            const iframe = $('#'+entry.target.id); // Selecciona el iframe

            if (entry.isIntersecting) {
                // Si el iframe está en el área visible, reproducir el video
                console.log('El video es visible, reproduciendo...');
                                    //playVideo(iframe);    

                
            } else {
                // Si el iframe no está visible, pausar el video
                console.log('El video no es visible, pausando...');
                // pauseVideo(iframe);
                
            }

            
                var id_publicacion=$(iframe).data('id-publicacion');
                   views_mov(id_publicacion);
                    
        });
    }, { threshold: 1.0 }); // 50% del iframe debe estar visible*/




    // Iniciar la observación del iframe
   
const elementosConClase = document.querySelectorAll('.video-iframe');

// Iterar sobre cada elemento y crear un Waypoint
elementosConClase.forEach(elemento => {
  new Waypoint({
    element: elemento,
 
    handler: function() {
      views_mov(elemento,1)
      // Aquí coloca tu código para ejecutar cuando el elemento sea visible
      // Por ejemplo, mostrar un modal, iniciar una animación, etc.
      //elemento.classList.add('animacion'); // Agregar una clase para activar una animación
    }
  });
});
const elementosConClase2 = document.querySelectorAll('.video-patrocinador');

// Iterar sobre cada elemento y crear un Waypoint
elementosConClase2.forEach(elemento => {
  new Waypoint({
    element: elemento,
    offset: '50%', 
    handler: function() {
        console.log("sss")
      views_mov(elemento,2)
      // Aquí coloca tu código para ejecutar cuando el elemento sea visible
      // Por ejemplo, mostrar un modal, iniciar una animación, etc.
      //elemento.classList.add('animacion'); // Agregar una clase para activar una animación
    }
  });
});
</script>