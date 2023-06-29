<!-- <!DOCTYPE> declaration. The declaration is not an HTML tag.It is an "information" to the browser about what document type to expect.-->
<!DOCTYPE html>
<html lang="en">
  <!-- The <head> element is a container for metadata (data about data) and is placed between the <html> tag and the <body> tag-->
	<head>
     <!-- Metadata is data about the HTML document. Metadata is not displayed. 
          Metadata typically define the document title, character set, styles, scripts, and other meta information.-->
		<meta charset="utf-8" />
		<title>Telephonic</title><!-- This is the title of our webpage it can be viewed at the top of browser as tab name or as heading of a tab.-->
		<meta name="author" content="Parmod" />
		<meta name="description" content="Telephone promoting website" />
		<link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	</head>
  <!--The <body> tag defines the document's body.The <body> element contains all the contents of an HTML document, such as headings, paragraphs, images, lists, etc.-->
    <body>
      <!--The <header> element represents a container for introductory content or a set of navigational links.-->
        <header>
            
            <?php 
                include("attach/nav.php"); 
            ?>
        </header>
<!--     Main content of body -->
        <main id="home">
  <!--The <div> tag defines a division or a section in an HTML document.The <div> tag is used as a container for HTML elements - which is then styled with CSS-->


    
            
<!--We can also give multiple classes to a tag using class attribute. This given class name is used in css to modify the content.-->
            
            <!-- Here we are declaring class history to set it in grid -->
    <div class="inventions">
               <!--The <fieldset> tag is used to group related elements in a form.The <fieldset> tag draws a box around the related elements.-->
                <fieldset>
                    <legend>Inventions</legend>
            <fieldset>
              <!--The <legend> tag defines a caption for the <fieldset> element.-->
                <legend>
                    1667</legend> Robert Hooke invents a string telephone that conveys sounds over an extended wire by mechanical vibrations. It was to be termed an 'acoustic' or 'mechanical' (non-electrical) telephone.
            </fieldset>
                <fieldset>
                <legend>
                    1753</legend> Charles Morrison proposes the idea that electricity can be used to transmit messages, by using different wires for each letter.[20]</fieldset>
                <fieldset>
                <legend>1844</legend> Innocenzo Manzetti first moots the idea of a "speaking telegraph" (telephone).</fieldset>
                <fieldset><legend>
                    1854</legend> Charles Bourseul writes a memorandum on the principles of the telephone. (See the article: "Transmission électrique de la parole", L'Illustration, Paris, 26 August 1854.)
                </fieldset>
                <fieldset>
                <legend>1854</legend> Antonio Meucci demonstrates an electric voice-operated device in New York; exactly what kind of device he demonstrates is unknown.</fieldset>
                <fieldset>
                    <legend>1861</legend> Philipp Reis constructs the first speech-transmitting telephone
                </fieldset>
                    <fieldset>
                <legend>28 December 1871</legend> Antonio Meucci files a patent caveat (No. 3353, a notice of intent to invent, but not a formal patent application) at the U.S. Patent Office for a device he names a "Sound Telegraph".[21]
                    </fieldset>
                <fieldset>
                    <legend>1872</legend> Elisha Gray establishes Western Electric Manufacturing Company.                    
                </fieldset>
                <fieldset>
                    <legend>1 July 1875</legend> Bell uses a bi-directional "gallows" telephone that is able to transmit "voicelike sounds", but not clear speech. Both the transmitter and the receiver are identical membrane electromagnet instruments.
                </fieldset>
                
<!--            Reference     https://en.wikipedia.org/wiki/History_of_the_telephone -->
            </fieldset>
            </div>
<!-- Here we are declaring class history to set it in grid -->
            <div class="history">
                <!-- h2 tag is used to write heading -->
                <h2>History of telegraph</h2>
                The telegraph is the immediate predecessor to the telephone; in fact, many people thought the telephone was unnecessary, as the telegraph already performed the function of instantly sending a message down a wire to an anxious party on the other end. Why add the novelty of voice to the mix? This thinking lead Western Union (the giant of the telegraph industry) to refuse Bell’s offer to buy the patents to the telephone in 1876 and changed the course of telephone history.
                <!-- Using img tag to include an image at the home page which is located in Images folder -->
<img src="Images/Telegraph.gif">
The telegraph had its origins in experiments by Professor Joseph Henry of the Albany Academy in New York. Henry was a preeminent scientist, creating an electromagnet powerful enough to send significant electrical energy over great distances, and he later became the first director of the Smithsonian Institution.

In 1831 Henry demonstrated, in his classroom, that electricity could be used to ring a bell from a distance. He strung a mile of copper wire inside the Academy, connected this to an electromagnet, placed a pivoting steel bar next to this, and placed a bell next to the bar. He then completed the circuit by connecting the ends of his wiring to a battery. When he did so, the electricity flowing down the wires from the battery caused the electromagnet to become magnetic, which then attracted the steel bar, which swung and hit the bell. Turning the magnet off (by removing the wires from the battery) caused the steel bar to swing back away from the bell, back to its natural resting position. Connecting the circuit again caused the bell to ring again … and so forth. Although this was very much like Franklin’s bells (see above), the key was that now the bell could be rung over a distance, at will.


            </div>
           <!-- Here we are declaring class tele to set it in grid --> 
            <div class="tele">
                <h2> From Telegraph to Telephone</h2>
The telegraph and telephone are both wire-based electrical systems. Alexander Graham Bell's success with the telephone came as a direct result of his attempts to improve the telegraph. When he began experimenting with electrical signals, the telegraph had been an established means of communication for some 30 years. Although a highly successful system, the telegraph was basically limited to receiving and sending one message at a time.
Bell's extensive knowledge of the nature of sound and his understanding of music enabled him to consider the possibility of transmitting multiple messages over the same wire at the same time. Although the idea of a "multiple telegraph" had been in existence for some time, it was purely conjecture as no one had been able to fabricate one—until Bell. His "harmonic telegraph" was based on the principle that several notes could be sent simultaneously along the same wire if the notes or signals differed in pitch.
                Telephone system, in which electric current is used to transmit the human voice, is derived from a principle discovered by C. G. Page of the United States in 1837. Based on this principle, in 1854, the Frenchman C. Bourseul revealed his concept of the use of vibrations generated on flexible diaphragms by the voice. Moreover, based on this concept, in 1861, J. P. Reis of Germany conducted an experiment (in which voice was projected onto a thin sausage skin to produce vibrations, and the vibrations were converted into changes in electric current), taking a closer step toward the realization of the telephone
            </div>
            <!-- Here we are declaring class prediction to set it in grid -->
            <div class="prediction">
                <h2>Past Predictions About the Future of the Telephone</h2>
<!--                 Using anchor tag to add link in text  -->
                President Rutherford B. Hayes to <a href="https://en.wikipedia.org/wiki/Alexander_Graham_Bell" style="color:#0093ff;" target="_blank">Alexander Graham Bell</a> in 1876 on viewing the telephone for the first time:<br/>
<em>“That’s an amazing invention, but who would ever want to use one of them?”</em><br>

Bell offered to sell his telephone patent to Western Union for $100,000 in 1876, when he was struggling with the business. An account that is believed by some to be apocryphal, but still recounted in many telephone histories states that the committee appointed to investigate the offer filed the following report:
<br/>
<!--                 em tag emphasise the text and make it italic -->
                <em>“We do not see that this device will be ever capable of sending recognizable speech over a distance of several miles. Messer Hubbard and Bell want to install one of their ‘telephone devices’ in every city. The idea is idiotic on the face of it. Furthermore, why would any person want to use this ungainly and impractical device when he can send a messenger to the telegraph office and have a clear written message sent to any large city in the United States? … Mr. G.G. Hubbard’s fanciful predictions, while they sound rosy, are based on wild-eyed imagination and lack of understanding of the technical and economic facts of the situation, and a posture of ignoring the obvious limitations of his device, which is hardly more than a toy … This device is inherently of no use to us. We do not recommend its purchase.”</em>
            </div>
        
  
    </main>
<!--     Footer  -->
    <?php include("attach/footer.php")?>

  <script src="JS/script.js" defer  ></script>
 <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
</body>

</html>
