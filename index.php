<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>php-google-fack</title>
</head>
<body>

 <?php
  $faq = [
    [
      'domanda' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",  
      'risposta' => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
        Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
        
        Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.
        
        Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
        
        Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
    ],
    [
      'domanda' => '',
      'risposta' => "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
    ],
    [
      'domanda' => '',
      'risposta' => "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
    ],
  ]
 ?>


    <header>
    <div class="header-top">
       <div class="logo-img">

          <img src="./assets/img/logo.jpg" alt="">
      </div>   
      <div class="logo-txt">
        <h3>privacy e terminy</h3>
      </div>
      <div class="favicon">
         <i class="fas fa-bars"></i>
         <button class="btn">accedi</button>
      </div>


       
    </div>
    <div class="header-bottom">
    <div class="link">
      <ul>
        <li><a href="#">introduzione</a></li>
        <li><a href="#">norme sulla privacy</a></li>
        <li><a href="#">termini di servizio</a></li>
        <li><a href="#">tecnologie</a></li>
        <li class="last" ><a class="last-l" href="#">domande frequenti</a></li>
      </ul>
    </div>
    </div>


    </header>

    <main>
      <div class="ac-container">
       <div class="domanda">
        <h3>
          <?php foreach ($faq as $question) {?>
            <?php echo $question['domanda'] ?>

          <?php } ?> 
        </h3>
       </div>

       <div class="risposta">
          <ul>
        <?php foreach ($faq as $question) {?>
         
       
        <li>
          <?php echo $question['risposta'] ?>
        </li>

        <?php } ?>
      </ul>

       </div>

      
        
      
     
     


      </div>
    </main>

    <footer>
      <div class="container">
         <div class="link">
          <ul>
            <li><a href="#">google</a></li>
            <li><a href="#">tutto su google</a></li>
            
            <li><a href="#">privacy</a></li>
            <li class="" ><a href="#">termini</a></li>
          </ul>
       </div>
      <div class="footer-dx">
       <select>

            <option value=""><srong>italiano</<strong></option>
            <option value=""><srong>francese</<strong></option>
            <option value=""><srong>spagnolo</<strong></option>
            <option value=""><srong>inglese</<strong></option>
            <option value=""><srong>tedesco</<strong></option>
            <option value=""><srong>cinese</<strong></option>
            <option value=""><srong>giapponese</<strong></option>



       </select>
       </div>
      </div>
      
    
  
      
     
    </footer>

</body>
</html>