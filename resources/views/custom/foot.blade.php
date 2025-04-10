
  <style>
    footer {
      background-color: #f2f2f2; /* Un gris claro de fondo */
      color: #333; /* Texto en gris oscuro */
      padding: 20px 0; /* Espacio arriba y abajo */
    }

    .footer-container {
      display: flex;
      justify-content: space-around; /* Espacio igual entre las columnas */
      max-width: 1200px; /* Ancho máximo del contenedor */
      margin: 0 auto; /* Centrar el contenedor */
      padding: 0 20px; /* Espacio a los lados del contenedor */
    }

    .footer-column {
      flex: 1; /* Las columnas ocupan el mismo espacio */
      padding: 0 15px; /* Espacio interno de cada columna */
    }

    .footer-column h3 {
      color: #007bff; /* Un color destacado para los títulos */
      margin-bottom: 10px;
    }

    .footer-column ul {
      list-style: none;
      padding: 0;
    }

    .footer-column ul li {
      margin-bottom: 5px;
    }

    .footer-column ul li a {
      color: #555;
      text-decoration: none;
    }

    .footer-column ul li a:hover {
      text-decoration: underline;
    }

    .footer-column p {
      margin-bottom: 10px;
    }

    .social-icons a {
      display: inline-block;
      margin-right: 10px;
    }

    .social-icons img {
      width: 30px; /* Tamaño de los iconos */
      height: 30px;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid #ccc; /* Línea separadora */
      margin-top: 20px;
    }

    .footer-bottom p {
      margin-bottom: 5px;
    }

    .footer-bottom a {
      color: #555;
      text-decoration: none;
      margin: 0 10px;
    }

    .footer-bottom a:hover {
      text-decoration: underline;
    }

    /* Adaptación para pantallas más pequeñas (opcional) */
    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column; /* Apilar las columnas en pantallas pequeñas */
        text-align: center;
      }

      .footer-column {
        margin-bottom: 20px;
      }
    }
  </style>
<footer>
    <div class="footer-container">
      <div class="footer-column">
        <h3>Sobre Nosotros</h3>
        <ul>
          <li><a href="#">Nuestra Historia</a></li>
          <li><a href="#">Equipo</a></li>
          <li><a href="#">Misión y Valores</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Servicios</h3>
        <ul>
          <li><a href="#">Servicio 1</a></li>
          <li><a href="#">Servicio 2</a></li>
          <li><a href="#">Servicio 3</a></li>
          <li><a href="#">Precios</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Contacto</h3>
        <p>Tu Dirección Aquí</p>
        <p>Email: info@tuemail.com</p>
        <p>Teléfono: +34 123 456 789</p>
        <div class="social-icons">
          <a href="#" target="_blank"><img src="icono-facebook.png" alt="Facebook"></a>
          <a href="#" target="_blank"><img src="icono-twitter.png" alt="Twitter"></a>
          <a href="#" target="_blank"><img src="icono-linkedin.png" alt="LinkedIn"></a>
          </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 Tu Nombre de Empresa. Todos los derechos reservados.</p>
      <p><a href="#">Política de Privacidad</a> | <a href="#">Términos y Condiciones</a></p>
    </div>
  </footer>
