<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biopharm - Menu</title>
  
</head>
<body>
    <header>
        <div class="logo">
            <img src=" \image\log2.png" alt="Biopharm Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#store">STORE</a></li>
                <li><a href="#category">CATEGORY</a></li>
                <li><a href="#about us">ABOUT US</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
        <div class="navbar">
        <div class="icon search-icon">🔍</div>
        <div class="icon cart-icon">
            🛍
            <span class="notification">0</span>
        </div>
    </div>
    </header>
     <div class="img1">
        <img src="image\2023-10_Allergen-overview-brochure-710x450.jpg" alt="" >
        <div class="ecrt1">
       <h2>Effective Medicine, New Medicine Everyday</h2>
       <h1>WELCOME TO <br> <div class="b">BIOPHARM</div> </h1>
       </div>
     </div>
     <!-- partie des photos -->
     <div class="container">
    <h5>Nos Produits Pharmaceutiques</h5>
    
    <div class="gallery">
      <div class="photo">
        <div class="overlay">
          <h2>Médicament A</h2>
          <p>Prix: 15,99€</p>
        </div>
        <img src="image\biopharm prod\Rhumatologie\3.jpg" alt="Médicament A">
      </div>
      <div class="photo">
        <div class="overlay">
          <h2>Médicament B</h2>
          <p>Prix:12,50€</p>
        </div>
        <img src="image\biopharm prod\Cardiovasculaire et métabolisme\i2.png" alt="Médicament B">
      </div>
      <div class="photo">
        <div class="overlay">
          <h2>Médicament C</h2>
          <p>Prix: 20,00€</p>
        </div>
        <img src="image\biopharm prod\Gastrologie\1.jpg" alt="Médicament C">
      </div>
    </div>
   </div>
   <div class="container">
   <div class="gallery">
      <div class="photo">
        <div class="overlay">
          <h2>Médicament A</h2>
          <p>Prix: 15,99€</p>
        </div>
        <img src="image\biopharm prod\Rhumatologie\3.jpg" alt="Médicament A">
      </div>
      <div class="photo">
        <div class="overlay">
          <h2>Médicament B</h2>
          <p>Prix:12,50€</p>
        </div>
        <img src="image\biopharm prod\Cardiovasculaire et métabolisme\i2.png" alt="Médicament B">
      </div>
      <div class="photo">
        <div class="overlay">
          <h2>Médicament C</h2>
          <p>Prix: 20,00€</p>
        </div>
        <img src="image\biopharm prod\Gastrologie\1.jpg" alt="Médicament C">
      </div>
    </div>
   </div>
   <a href="store.php" class="btn">Voir Nos Produits</a>
   <section class="testimonials">
        <div class="testimonial">
            <div class="card">
                <h3>PHARMA PRODUCTS</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.</p>
                <img src="https://via.placeholder.com/150" alt="Pills">
            </div>
            <div class="card">
                <h3>RATED BY EXPERTS</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.</p>
                <img src="https://via.placeholder.com/150" alt="Doctor">
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-section">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates sed dolorum excepturi iure eaque, aut unde.</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Supplements</a></li>
                    <li><a href="#">Vitamins</a></li>
                    <li><a href="#">Diet & Nutrition</a></li>
                    <li><a href="#">Tea & Coffee</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact Info</h4>
                <p><i class="icon-location"></i> Pharmacie Belle Vue, QWQ5+7HM, Aïn Benian</p>
                <p><i class="icon-phone"></i> +213 5572195</p>
                <p><i class="icon-email"></i> pharmavie@gmail.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2025 with ❤️ by Organisation Mondiale de la Santé</p>
        </div>
    </footer>
</body>
</html>
<style>
    /* style.css */

/* Réinitialisation de base */


.img1 img{
    width:100%;
    height:600px;
}

/* Corps de la page */
body {
    font-family: georgia, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}
.ecrt1{
    position:relative;
    left:500px;
    top:-400px;
    
}
.b{
    position:relative;
    left:40px;
}
h1{
    font-size: 60px;
}
h2{
    font-size: 20px;
}

/* En-tête et logo */
header {
    background-color:white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.navbar {
    display: flex;
    gap: 20px;
}

.icon {
    position: relative;
    left:-140px;
    font-size: 24px;
    cursor: pointer;
    color: #333;
}

.notification {
    position: absolute;
    top: -5px;
    right: -10px;
    background-color: #00c4cc;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    width: 20px;
    height: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    border: 2px solid white;
}

header .logo img {
    max-height: 50px;
   
}
.logo{
    position:relative;
    left:150px;
}

header nav ul {
    list-style: none;
    display: flex;
}

header nav ul li {
    margin-left: 50px;
    position:relative;
    left:-50px;
}

header nav ul li a {
    text-decoration: none;
    color: black;
    font-size: 14px;
    padding: 10px 15px;
    transition: background-color 0.3s;
}

header nav ul li a:hover {
    background-color:#8298e6;
    border-radius: 5px;
}
/*photo*/

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

.container {
  width: 80%;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  text-align: center;
  color: #333;
  margin-bottom: 40px;
}

.gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.photo {
  position: relative;
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.photo img {
  width: 100%;
  height: auto;
  display: block;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); 
  color: white;
  text-align: center;
  padding: 20px;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

.overlay h2 {
  font-size: 24px;
  margin: 0;
}

.overlay p {
  font-size: 18px;
  margin-top: 10px;
}

.photo:hover .overlay {
  opacity: 1; 
}


@media (max-width: 768px) {
  .gallery {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 480px) {
  .gallery {
    grid-template-columns: 1fr;
  }
}



/* Footer */
footer {
    background-color: #8298e6;
    color: white;
    text-align: center;
    padding: 10px 0;
}
/*botton*/
.btn {
  display: inline-block;
  padding: 15px 30px;
  font-size: 16px;
  color: #ffffff;
  background-color: #8298e6; /* Vert pharmaceutique */
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s, transform 0.3s;
  display: flex;
    justify-content: center; /* Centre horizontalement */
    align-items: center; /* Centre verticalement */
  }

.btn:hover {
  background-color: #088c45; /* Couleur plus foncée au survol */
  transform: translateY(-5px); /* Effet de levée du bouton */
}

.btn:active {
  transform: translateY(2px); /* Effet d'enfoncement lors du clic */
}
.testimonials {
    background-color:#8298e6;
    padding: 50px 20px;
    text-align: center;
    color: #fff;
}

.testimonial {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.card {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 20px;
    width: 300px;
    text-align: left;
    color: #000;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.card h3 {
    margin-top: 0;
    color: #00c4cc;
}

.card img {
    width: 100%;
    margin-top: 20px;
    border-radius: 10px;
}
/*footer*/
.footer {
    background-color: #f8f9fa;
    padding: 30px 20px;
}

.container {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
}

.footer-section {
    flex: 1;
    min-width: 200px;
}

.footer-section h4 {
    margin-bottom: 15px;
    font-size: 18px;
    color:black;
}

.footer-section p,
.footer-section ul {
    margin: 0;
    padding: 0;
    list-style: none;
    line-height: 1.6;
    color:#777;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    text-decoration: none;
    color: #777;
    transition: color 0.3s;
}

.footer-section ul li a:hover {
    color: #007bff;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #777;
}

.footer-bottom p {
    margin: 0;
}

.icon-location::before,
.icon-phone::before,
.icon-email::before {
    content: '';
    margin-right: 8px;
}

.icon-location::before {
    content: '📍';
}

.icon-phone::before {
    content: '📞';
}

.icon-email::before {
    content: '✉️';
}

</style>