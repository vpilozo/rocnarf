<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #333;
        }

        .menu>li {
            position: relative;
        }

        .menu>li>a {
            display: block;
            padding: 15px;
            color: white;
            text-decoration: none;
        }

        .menu>li>a:hover {
            background-color: #575757;
        }

        .submenu {
            display: none;
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #444;
        }

        .submenu li a {
            padding: 10px;
            color: white;
            text-decoration: none;
        }

        .submenu li a:hover {
            background-color: #666;
        }
    </style>
</head>

<!--<body class="border-0 m-0 dark:bg-gray-800 bg-red-200">-->

<body>

    <div class="bg-[#C9777D] p-[1px]">
        <div class="max-w-[1100px] my-2 mx-auto">
            <div class="sm:flex justify-between">
                <div class="flex gap-2">
                    <a class="text-white rounded-full" href="">
                        @include("/icons/facebook")
                    </a>
                    <a class="text-white bg" href="">
                        @include("/icons/instagram")
                    </a>
                    <a class="text-white bg" href="">
                        @include("/icons/tiktok")
                    </a>
                </div>
                <div class="flex gap-4">
                    <a class="text-white cursor-pointer" href="">Mi cuenta</a>
                    <a class="text-white cursor-pointer" href="">Punto de venta</a>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[1100px] my-2 mx-auto">
        <div class="flex justify-between items-center">
            <img src="{{asset('img/logo.png')}}" alt="">
            <div>

                <div class="menu_content">
                    <!--<ul class="menu">
                        <li>
                            <a href="#" class="toggle-submenu">Menú 1</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#" class="toggle-submenu">Submenú 1.1</a>
                                    <ul class="submenu">
                                        <li><a href="#">Sub-submenú 1.1.1</a></li>
                                        <li><a href="#">Sub-submenú 1.1.2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Submenú 1.2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Menú 2</a></li>
                        <li>
                            <a href="#" class="toggle-submenu">Menú 3</a>
                            <ul class="submenu">
                                <li><a href="#">Submenú 3.1</a></li>
                                <li><a href="#">Submenú 3.2</a></li>
                            </ul>
                        </li>
                    </ul>-->

                    <?php

                    use App\Models\Menu;

                    $menuHtml = '';
                    if (isset($menus) && count($menus) > 0) {
                        $menuHtml .= '<ul class="menu">';
                        $submenuHtml = '';
                        $SubClase = '';
                        foreach ($menus as $menu) {
                            if (count($menu->subMenus) > 0) {
                                $submenuHtml .= '<ul class="submenu">';
                                $SubClase = ' class="toggle-submenu"';
                                $SubClase_ = '';
                                $submenuHtml_ = '';
                                foreach ($menu->subMenus as $submenu) {
                                    $subMenu_ = Menu::with('allSubMenus')->find($submenu->id);

                                    if (count($subMenu_->allSubMenus) > 0) {
                                        $SubClase_ = ' class="toggle-submenu"';
                                        $submenuHtml_ .= '<ul class="submenu">';
                                        foreach ($subMenu_->allSubMenus as $sub_) {
                                            $submenuHtml_ .= ' <li><a href="#">' . $sub_->nombre . '</a></li>';
                                        }
                                        $submenuHtml_ .= '</ul>';
                                    }

                                    $submenuHtml .= '<li><a href="' . $submenu->controlador . '/' . $submenu->funcion . '" ' . $SubClase_ . '>' . $submenu->nombre . '</a>' . $submenuHtml_ . '</li>';
                                    $submenuHtml_ = '';
                                    $SubClase_='';
                                }
                                $submenuHtml .= '</ul>';
                            }
                            $menuHtml .= '<li><a href="#" ' . $SubClase . '>' . $menu->nombre . '</a>' . $submenuHtml . '</li>';
                        }
                        $menuHtml .= '</ul>';
                    }
                    echo $menuHtml;
                    ?>

                </div>


                <input class=" border-2 border-[#C9777D] rounded-full pt-[9px] pr-[0px] pb-[9px] pl-[20px]" type="text">
            </div>
        </div>
    </div>
    <script> 
        // Selecciona todos los enlaces que activan los submenús
        const toggleSubmenuLinks = document.querySelectorAll('.toggle-submenu');

        toggleSubmenuLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Evita el comportamiento por defecto del enlace
                const submenu = this.nextElementSibling; // Obtiene el siguiente submenú

                if (submenu) {
                    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block'; // Alterna el estado de visualización
                }
            });
        });
    </script>
</body>

</html