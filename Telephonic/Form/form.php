<!-- All HTML documents must start with a <!DOCTYPE> declaration. -->
<!DOCTYPE html>
<!-- The <html> tag represents the root of an HTML document.The <html> tag is the container for all other HTML elements -->
<html lang="en">
	<head>
		<meta charset="utf-8" />
    <!--     Providing  the title of the page-->
		<title>Telephonic | Buy</title>
		<meta name="author" content="Pooja" />
		<meta name="description" content="Telephone promoting website" />
		 <!--     Importing from Files -->
    <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    </head>
  <!-- Body tag starts -->
    <body>
        <header>
            
           
        </header>
      <!--     Main tag starts  -->
        <main>
            <section >
              <!--       Creating a div tag and giving it a class container in which the whole poster and its info is provided -->
                <div class="form-container">
                  
                    <form id="form-start" action="process-form.php " method="get">
                    <h1>Form to purchase the telephone</h1>
                    <span class="material-symbols-outlined"><a href="../index.php">home</a></span>
                    <!--The <fieldset> tag is used to group related elements in a form.The <fieldset> tag draws a box around the related elements.-->
                    <fieldset>
                       <!--The <legend> tag defines a caption for the <fieldset> element.-->
                        <legend>Personal Info</legend>
                        <div class="inputBox name">
                          <!--The <input> tag specifies an input field where the user can enter data.The <input> element is the most important form element.-->
                            <input type="text" id="fname" name="fname" size="30" max-length="50"  required="required"/>
                            <span for="fname">First Name </span>
                        </div>
                        <div class="inputBox name">
                            <input type="text" id="lname" name="lname" size="30" max-length="50"  required="required"/>
                            <span for="lname">Last Name  </span>
                        </div>
                        <div class="inputBox dob">
                            <label>Date of Birth : </label>
                            <input type="date" />
                        </div>
                        <div class="inputBox">
                            <input type="text" id="email" name="email" size="40" max-length="50" required="required"/>
                            <span for="email">Email Address </span>
                        </div>
                        
                        
                    </fieldset>
                    <!--The <fieldset> tag is used to group related elements in a form.The <fieldset> tag draws a box around the related elements.-->  
                    <fieldset>
                      <!-- Province options to be selected by customer-->
                        <legend>Address Details</legend>
                        <div class="province">
                            <label>Province   : </label>
                            <!-- cities to be selected-->
                            <select id="province" name="province"  >
                                <option value="" disabled selected >-- Select Province --</option>
                                <option value="1">Ontario</option>
                                <option value="2">Quebec</option>
                                <option value="3">British Columbia</option>
                                <option value="4">Sasketcahwan</option>                        
                            </select>
                            <label>City   : </label>
<!--                             Here user will select city in province -->
                            <select  id="disable" name="select"  >
                                <option value="" disabled selected >-- Select City --</option>
                            </select>
                            <select id="Ontario" name="Ontario"  >
                                <option value="" disabled selected >-- Select City --</option>
                                <option value="Toronto">Toronto</option>
                                <option value="Ottawa">Ottawa</option>
                                <option value="Brampton">Brampton</option>
                                <option value="Cambridge">Cambridge</option>                        
                            </select>
                            <select id="Quebec" name="Quebec"  >
                                <option value="" disabled selected >-- Select City --</option>
                                <option value="Amos">Amos</option>
                                <option value="Gracefield">Gracefield</option>
                                <option value="Neuville">Neuville</option>                        
                                <option value="Waterloo">Waterloo</option>
                            </select>
                            <select id="British" name="British"  >
                                <option value="" disabled selected>-- Select City --</option>
                                <option value="Armstrong">Armstrong</option>
                                <option value="Nelson">Nelson</option>
                                <option value="Richmond">Richmond</option>
                                <option value="Victoria">Victoria</option>                        
                            </select>
                            <select id="sasketcahwan" name="sasketcahwan"   >
                                <option value="" disabled selected >-- Select City --</option>
                                <option value="Estevan">Estevan</option>
                                <option value="Lloydminster">Lloydminster</option>
                                <option value="Saskatoon">Saskatoon</option>
                                <option value="Yorkton">Yorkton</option>                        
                            </select>
                        </div>
                        <div class="inputBox ">
                            <input type="textarea" id="address1" name="address1" size="40" max-length="50" required="required"/>
                            <span for="address">Address Line 1</span>
                        </div>
                        
                    </fieldset>
                        <fieldset class="types">
                            <legend>Type of Telephone</legend>
                            <div>
                               <!--The <input type="checkbox"> defines a checkbox.
                    The checkbox is shown as a square box that is ticked (checked) when activated.
                    Checkboxes are used to let a user select one or more options of a limited number of choices.-->
                            <input type="checkbox" name="type[]" id="type1" value="gower" />
                            <label for="type1">Gower-Bell Telephone</label>
                            </div>
                            <div>
                            <input type="checkbox" name="type[]" id="type2" value="cradle" />
                            <label for="type2">Wood cradle desk telephone - 1885</label>
                            </div>
                            <div>
                            <input type="checkbox" name="type[]" id="type3" value="strom" />
                            <label for="type3">Stromberg-Carlson tapered shaft desk set - 1900</label>
                            </div>
                            <div>
                            <input type="checkbox" name="type[]" id="type4" value="chicago" />
                            <label for="type4">Chicago upright desk set - 1905</label>
                            </div>
                        </fieldset>
                        <div class="inputBox buttons">
                           <!--The <input type="submit"> defines a submit button which submits all form values to a form-handler.-->
                            <input type="submit" value="Submit" id="submit">
                          <!--The <input type="reset"> defines a reset button which resets all form values.-->
                            <input type="reset" value="RESET" id="reset">
                        </div>
                    </form>
                </div>
                </section>
        </main>
        <script src="../JS/form.js" defer></script>
    </body>
</html>