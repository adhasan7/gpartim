<nav class="navigation">
    <div class="ps-container">
        <div class="navigation__left">
            <div class="menu--product-categories">
                <div class="menu__toggle"><i class="icon-menu"></i><span>Kategori Produk</span></div>
                <div class="menu__content">
                    <ul class="menu--dropdown">       
                        <?php 
                            $kategori = $this->model_app->view_ordering('rb_kategori_produk','nama_kategori','ASC');
                            foreach ($kategori as $rows) {
                                if ($rows['icon_kode']!=''){
                                    $icon = "<i class='$rows[icon_kode]'></i>";
                                }elseif ($rows['icon_image']!=''){
                                    $icon = "<img style='width:18px; height:18px; margin-right:10px' src='".base_url()."asset/foto_produk/$rows[icon_image]'>";
                                }else{
                                    $icon = "";
                                }
                                $sub_kategori = $this->db->query("SELECT * FROM rb_kategori_produk_sub where id_kategori_produk='$rows[id_kategori_produk]' ORDER BY nama_kategori_sub ASC");
                                if ($sub_kategori->num_rows()>=1){
                                    echo "<li class='current-menu-item menu-item-has-children has-mega-menu'><a href='".base_url()."produk/kategori/$rows[kategori_seo]'> $icon $rows[nama_kategori] <span class='caret caret-right'></span></a>
                                        <div class='mega-menu'>";                                        
                                            echo "<div class='mega-menu__column'>";
                                            echo main_menux($rows['id_kategori_produk']);
                                            echo "</div>";                                        
                                        echo "</div>
                                    </li>";
                                }else{
                                    echo "<li class='current-menu-item'><a href='".base_url()."produk/kategori/$rows[kategori_seo]'> $icon $rows[nama_kategori]</a></li>";
                                }
                            } 


                        ?> 
                    </ul>
                </div>
            </div>
        </div>
        <div class="navigation__right">
        <?php 
                function main_menu() {
                    $ci = & get_instance();
                    $query = $ci->db->query("SELECT id_menu, nama_menu, link, id_parent FROM menu where aktif='Ya' AND position='Bottom' order by urutan");
                    $menu = array('items' => array(),'parents' => array());
                    foreach ($query->result() as $menus) {
                        $menu['items'][$menus->id_menu] = $menus;
                        $menu['parents'][$menus->id_parent][] = $menus->id_menu;
                    }
                    if ($menu) {
                        $result = build_main_menu(0, $menu);
                        return $result;
                    }else{
                        return FALSE;
                    }
               //var_dump($menu);
                }
        
                function build_main_menu($parent, $menu) {
                   // var_dump($menu);die;
                    $html = "";
                    if (isset($menu['parents'][$parent])) {
                        if ($parent=='0'){
                            $html .= "<ul class='menu'>";
                        }else{
                            $html .= "<ul class='sub-menu'>";
                        }
                        foreach ($menu['parents'][$parent] as $itemId) {
                            // if($menu['items'][$itemId]->id_menu != 159 && $menu['items'][$itemId]->id_menu != 194){  //159
                          //  if($menu['items'][$itemId]->id_menu != 194){  //159
                            if($menu['items'][$itemId]->id_menu != 194 )
                            {  //159
                                // if($menu['items'][$itemId]->id_menu != 194){  //159
                                
                            if (!isset($menu['parents'][$itemId])) {
                                // var_dump($menu);die;
                                if(preg_match("/^http/", $menu['items'][$itemId]->link)) {
                                    $html .= "<li class='current-menu-item'><a target='_BLANK' href='".$menu['items'][$itemId]->link."'>".$menu['items'][$itemId]->nama_menu."</a><span class='sub-toggle'></span></li>";
                                }else{
                                    $html .= "<li class='current-menu-item'><a href='".base_url().''.$menu['items'][$itemId]->link."'>".$menu['items'][$itemId]->nama_menu."</a><span class='sub-toggle'></span></li>";
                                }
                            }

                            if (isset($menu['parents'][$itemId])) {
                                // var_dump($menu);die;
                                if(preg_match("/^http/", $menu['items'][$itemId]->link)) {
                                    $html .= "<li class='menu-item-has-children'><a target='_BLANK' href='".$menu['items'][$itemId]->link."'><span>".$menu['items'][$itemId]->nama_menu."</span></a>";
                                }else{
                                    $html .= "<li class='menu-item-has-children'><a href='".base_url().''.$menu['items'][$itemId]->link."'><span>".$menu['items'][$itemId]->nama_menu."</span></a>";
                                }
                                $html .= build_main_menu($itemId, $menu);
                                $html .= "</li>";
                            }
                            } elseif (!empty($_SESSION['id_konsumen']) && $menu['items'][$itemId]->id_menu == 194 ){
                                if (!isset($menu['parents'][$itemId])) {
                                    // var_dump($menu);die;
                                    if(preg_match("/^http/", $menu['items'][$itemId]->link)) {
                                        $html .= "<li class='current-menu-item'><a target='_BLANK' href='".$menu['items'][$itemId]->link."'>".$menu['items'][$itemId]->nama_menu."</a><span class='sub-toggle'></span></li>";
                                    }else{
                                        $html .= "<li class='current-menu-item'><a href='".base_url().''.$menu['items'][$itemId]->link."'>".$menu['items'][$itemId]->nama_menu."</a><span class='sub-toggle'></span></li>";
                                    }
                                }
    
                                if (isset($menu['parents'][$itemId])) {
                                    // var_dump($menu);die;
                                    if(preg_match("/^http/", $menu['items'][$itemId]->link)) {
                                        $html .= "<li class='menu-item-has-children'><a target='_BLANK' href='".$menu['items'][$itemId]->link."'><span>".$menu['items'][$itemId]->nama_menu."</span></a>";
                                    }else{
                                        $html .= "<li class='menu-item-has-children'><a href='".base_url().''.$menu['items'][$itemId]->link."'><span>".$menu['items'][$itemId]->nama_menu."</span></a>";
                                    }
                                    $html .= build_main_menu($itemId, $menu);
                                    $html .= "</li>";
                                }

                            }
                        }

                        // chatgpt tabmbahkan "layanan gpar" jika pengguna sudah login

                        //=======> iltingprof<===============
                        
                        // if(!empty($_SESSION['id_konsumen'])){
                        //     $html .= "<li class='current-menu-item'>
                        //     <a href='#'><span>Layanan Gpar</span></a>"; //tu tampil mantap. pengen kondisi yang tadi ku katakan mas
                        // }

                        // =========> penutup iltingprof===========

                        // if(!empty($_SESSION['id_konsumen'])){
                        //     $html .= "<li class='current-menu-item'><a href='https://www.google.com'><span>Layanan Gpar</span></a>"; //tu tampil mantap. pengen kondisi yang tadi ku katakan mas
                        // }
 
                        // itu dah login?ubeati dah bener  coba ajja logout.. itu blm login deng

                        //  Tabmbahkan menu "layanan Gpar" jika pengguna sudah login versi chat gpr2
            //             if (!empty ($_SESSION['id_konsumen'])) {
            //                 $html .= "<li class='current-menu-item menu-item-has-children'><a href='#"><span>Layanan Gpar</span></a>"'
            //                 $html .= "<ul class='sub-menu'>";

            //                 // Tambahkan submenu
            //                 $html .= "<li> <a href='#'>SUbmenu 1 </a></li>";
            //                 $html .= "<li><a href='#'>Submenu 2 </a></li>";
            //             }
            //             $html .= "</ul>";"
            //             }

            //             $html .= "</ul>";
            //         }
            //         return $html;
            //     }
            //     echo main_menu();

             // Tambahkan menu "Layanan Gpar" jika pengguna sudah login
     

        $html .= "</ul>";
    }
    return $html;
}

echo main_menu();
?>

            ?>


            <ul class="navigation__extra">
                <?php 
                    $topmenu = $this->model_utama->view_where_ordering_limit('menu',array('position' => 'Top','aktif' => 'Ya'),'urutan','ASC',0,5);
                    foreach ($topmenu->result_array() as $row) {
                        if(preg_match("/^http/", $row['link'])) {
                            echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
                        }else{
                            echo "<li><a href='".base_url()."$row[link]'>$row[nama_menu]</a></li>";
                        }
                    }
                ?>
            </ul>
        </div>
    </div>
</nav> ?>