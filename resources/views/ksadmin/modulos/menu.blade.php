  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ url('/') }}" class="brand-link">
          <img src="{{ url('/') }}/images/logo-fisioterapia-en-bogota.png" alt="Fisioterapia en Bogotá Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8; width: 40px; height: 40px;">
          <span class="brand-text font-weight-light">KS Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ url('/') }}/images/admin.jpg" class="img-circle elevation-2" alt="Admin Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Adriana Ramirez</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-header">BLOG</li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Gestionar
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/blog/lista_entradas" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Lista Entradas</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/blog/entrada" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Nueva Entrada</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/blog/comentarios" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Autorizar Comentarios</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/blog/categorias" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Categorías</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-header">ENGLISH BLOG</li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Manage
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/blog/lista_entradas_en" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Articles List</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/blog/entrada_en" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>New Article</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/blog/comentarios_en" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Approve Comment</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-header">WEBSITE</li>
                  <li class="nav-item">
                      <a href="{{ url('/') }}/ks-admin/barrasup" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Encabezado
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/') }}/ks-admin/menu" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Menú
                          </p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Inicio
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/sliders" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sliders</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/inicio/seccion1" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sección 1</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/inicio/seccion2" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sección 2</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/inicio/seccion3" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sección 3</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/inicio/seccion4" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Vídeo Youtube</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/inicio/seccion5" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sección 5</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/inicio/seccion6" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sección 6</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/inicio/seccion8" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sección 8</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/inicio/seccion9" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sección 9</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/inicio/seccion10" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sección 10</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/inicio/seccion11" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Testimonios</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/') }}/ks-admin/inicio/seccion12" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>FAQ</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/') }}/ks-admin/acerca" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Acerca
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/') }}/ks-admin/nace" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Nace
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/') }}/ks-admin/telerehabilitacion" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Telerehabilitación
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/') }}/ks-admin/fisioterapia" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Fisioterapia
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/') }}/ks-admin/cuello" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Dolor de Cuello
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/') }}/ks-admin/espalda" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Dolor de Espalda
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/') }}/ks-admin/rodilla" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Dolor de Rodilla
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/') }}/ks-admin/espalda" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Lesiones Deportivas
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
