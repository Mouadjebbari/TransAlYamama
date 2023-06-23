<?php include_once 'helpers/helper.php'; ?>

<?php subview('header.php'); 
    require 'helpers/init_conn_db.php';                      
	?> 	<br><br>
<style>
* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}


html {
    font-family: "Poppins", sans-serif;
    font-weight: 300;
    font-size: 10px;
}

h3{
  font-size : 4rem;
  font-weight: 600;
  text-align: center;
}

.hal3ar{
    width : 800px;
    height: 70vh;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 5rem 7rem;
    border-radius: 1.25rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.25);
     
      @media screen and (max-width:769px) {
        width: 650px;
        padding: 3rem 7rem;
      }
      @media screen and (max-width:480px) {
          width: 350px;
          padding: 2rem 2rem;
      }
}

.container-heading{
    margin-bottom: 20px;
      @media screen and (max-width:769px) {
        font-size: 3rem;
      }
      @media screen and (max-width:480px) {
          font-size: 2.3rem;
          margin-bottom: 10px;
      }
}

.container-image{
    width:100px;
      margin-bottom: 20px;
      @media screen and (max-width:480px){
          width : 70px;
          margin-bottom: 20px;
    }
}

.container-welcome{
    font-size: 3rem;
      margin-bottom: 10px;
      @media screen and (max-width:769px) {
        font-size: 2.5rem;
      }
      @media screen and (max-width:480px) {
          font-size: 1.6rem;
          margin-bottom: 5px;
      }
}

.container-cube{
    font-size: 3rem;
      margin-bottom: 20px;
      @media screen and (max-width:769px) {
        font-size: 2.5rem;
      }
      @media screen and (max-width:480px) {
          font-size: 1.6rem;
          margin-bottom: 20px;
      }
}

.container-text{
    text-align: center;
      font-size: 1.6rem;
      font-weight:400;
      margin-bottom: 20px;
      @media screen and (max-width:769px) {
        font-size: 1.5rem;
      }
      @media screen and (max-width:480px) {
          font-size: 1.2rem;
          margin-bottom: 10px;
      }
}    
</style><br><br>
<section>
  <main>
    <div class="hal3ar mx-auto my-5">
    
      <h3 class="container-heading">Paiement réussi !</h3>
      <img
        class="container-image"
        src="https://res.cloudinary.com/dmnazxdav/image/upload/v1599736321/tick_hhudfj.svg"
        alt="Payment SuccesFul"
      />
      <h3 class="container-welcome">Merci de nous avoir choisi</h3>
      <p class="container-text">
      Un reçu de paiement automatisé sera envoyé à votre adresse e-mail enregistrée.
      </p>
      <a class='btn btn--base' href='index.php'>Retour</a>
    </div>
    </div>
</main>
</section>



