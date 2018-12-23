<!DOCTYPE html>
<html>
<head>
<title>White Box Elf (Variant) Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2018">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/github_ll_additions.css"/> 
	<link rel="stylesheet" href="css/github_ll_style.css"/> 
	<link rel="stylesheet" href="css/github_ll_additions_advance.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="Basic Fantasy RPG Generator" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The White Box Fantastic Medieval Adventures Elf (Variant) Character Generator is designed primarily with PHP and jQuery/JavaScript.  The Launch Page has a series of drop-down menus, input fields and checkboxes, where alignments, weapons, armour, gear, character level, etc., are added to the character sheet.  When the submit button is entered, the information (variables) is collected through POST methods and added to the character sheet.  Several of the variables POSTED modify the values on the character sheet; therefore, jQuery or PHP functions have been created to make these adjustments possible.</p>

        <p>Several of the jQuery/JavaScript functions are stored in external files, as a means of creating greater design efficiency, with the goal of designing a program with high cohesion and low coupling.  In this way, this program replicates Object-Oriented design.  JSON is used to store multi-column variables, with jQuery functions used to retrieve these variables.    </p>    

        <br/>
        <br/>
    
   
            
		<form action="" id ="elfForm"  target="_blank" method="post">
            

            <div class="content9">
  
            <span class="formIputDescription">Character's Name:</span>
            <input type="text" id="characterName" name="theCharacterName" value="" class="nameBox">

            <br/>
            <br/>
            
            
                            
            <span class="formIputDescription">Character Level:</span>	
			  <select id="level" name="theLevel" class="alignmentBox">	
				<option value="1" selected>1st Level, Elf (Variant)</option>
				<option value="2">2nd Level, Elf (Variant)</option>
				<option value="3">3rd Level, Elf (Variant)</option>
				<option value="4">4th Level, Elf (Variant)</option>
				<option value="5">5th Level, Elf (Variant)</option>
				<option value="6">6th Level, Elf (Variant)</option>
				<option value="7">7th Level, Elf (Variant)</option>
				<option value="8">8th Level, Elf (Variant)</option>
			  </select>
            
            <br/>
            <br/>
                
                <!--    
                <span class="formIputDescription">Race:</span>	
			  <select id="chracterRace" name="theCharacterRace" class="alignmentBox">	
				<option value="Human" selected>Human</option>
				<option value="Dwarf">Dwarf (6)*</option>
				<option value="Elf">Elf (4)*</option>
				<option value="Halfling">Halfling (4)*</option>
			  </select>
                
               <p><span class="footnote2">&#42;Maximum demi-human Elf (Variant) level.</span></p>
                -->
            
            <span class="formIputDescription">Alignment:</span>	
			  <select id="alignment" name="theAlignment" class="alignmentBox">			
                <option value="Lawful" selected>Lawful</option>
				<option value="Neutral">Neutral</option>
				<option value="Chaotic">Chaotic</option>
			  </select>
            
            <br/>
            <br/>
                            
                <span class="formIputDescription">Ability Scores:</span>	
			  <select id="abilityScores" name="theAbilityScore" class="alignmentBox">	
				<option value="1" selected>3d6 (Old School)</option>
				<option value="2">4d6, drop the lowest</option>
				<option value="3">2d6+6</option>
				<option value="4">2d8+2</option>
				<option value="5">2d7+4</option>
			  </select>
            
                
            <br/>
            <br/>
                            
                <span class="formIputDescription">Saving Throws:</span>	
			  <select id="savingThrows" name="theSavingThrows" class="alignmentBox">	
				<option value="1" selected>Single Saving Throw</option>
				<option value="2">Saving Throw Matrix (Fighter)</option>
				<option value="3">Saving Throw Matrix (Magic-User)</option>
			  </select>
            
                
            <br/>
            <br/>
                
                            

                            
            <span class="formIputDescription">Armour:</span>	
			  <select id="armour" name="theArmour" class="alignmentBox">			
                <option value="0" selected>No Armour</option>
				<option value="1">Shield</option>
				<option value="2">Leather Armour</option>
				<option value="3">Leather Armour + Shield</option>
				<option value="4">Chain Mail</option>
				<option value="5">Chain Mail + Shield</option>
				<option value="6">Plate Mail</option>
				<option value="7">Plate Mail + Shield</option>
			  </select>
            
            <br/>
            <br/>         
                
           
            <span class="formIputDescription">Wealth:</span>	
			  <select id="gold" name="theGold" class="alignmentBox">			
                <option value="0" selected></option>
				<option value="1">1d6 silver and 2d6 copper pieces&#42;</option>
				<option value="2">2d6 gold and 2d6 silver pieces&#42;</option>
				<option value="3">5d6 gold and 1d6 silver pieces&#42;</option>
			  </select>
                <p>
               <span class="footnote2">&#42;d6 x 10 coins</span></p>
            
            <br/>
                

                <span class="weaponBoxHeader">Weapons:</span>
                <br/><br/>
                
            <div id="weaponsGroupings">
                <input type="checkbox" name="theWeapons[]" value="0"> Axe, battle<br/>
                <input type="checkbox" name="theWeapons[]" value="1"> Axe, hand<br/>  
                <input type="checkbox" name="theWeapons[]" value="2"> Club<br/>  
                <input type="checkbox" name="theWeapons[]" value="3"> Dagger<br/>  
                <input type="checkbox" name="theWeapons[]" value="4"> Flail<br/> 
                <input type="checkbox" name="theWeapons[]" value="5"> Mace<br/>   
                <input type="checkbox" name="theWeapons[]" value="6"> Morning Star<br/> 
                <input type="checkbox" name="theWeapons[]" value="7"> Polearm<br/>  
                <input type="checkbox" name="theWeapons[]" value="8"> Spear<br/> 
                <input type="checkbox" name="theWeapons[]" value="9"> Staff<br/> 
                <input type="checkbox" name="theWeapons[]" value="10"> Sword, long<br/> 
                <input type="checkbox" name="theWeapons[]" value="11"> Sword, short<br/> 
                <input type="checkbox" name="theWeapons[]" value="12"> Sword, two-handed<br/> 
                <input type="checkbox" name="theWeapons[]" value="13"> Warhammer<br/> 
                <input type="checkbox" name="theWeapons[]" value="14"> Bow, long<br/> 
                <input type="checkbox" name="theWeapons[]" value="15"> Bow, short<br/> 
                <input type="checkbox" name="theWeapons[]" value="16"> Crossbow, heavy<br/> 
                <input type="checkbox" name="theWeapons[]" value="17"> Crossbow, light<br/> 
                <input type="checkbox" name="theWeapons[]" value="18"> Sling<br/> 
                
                
                </div>
                <br/>
                <br/>
                
                <span class="weaponBoxHeader">Equipment/Ammo:</span>
                <br/><br/>
                
            <div id="gearGroupings">
                <span class="weaponSubHead">Equipment:</span><br/><br/>
                <input type="checkbox" name="theGear[]" value="0"> Backpack (30 lb.)+<br/>
                <input type="checkbox" name="theGear[]" value="1"> Bedroll<br/>  
                <input type="checkbox" name="theGear[]" value="2"> Belladonna, bunch<br/>  
                <input type="checkbox" name="theGear[]" value="3"> Wine (bottle)<br/>  
                <input type="checkbox" name="theGear[]" value="4"> Case (map/scroll)<br/>  
                <input type="checkbox" name="theGear[]" value="5"> Crowbar<br/>   
                <input type="checkbox" name="theGear[]" value="6"> Flint and steel<br/>  
                <input type="checkbox" name="theGear[]" value="7"> Garlic<br/>  
                <input type="checkbox" name="theGear[]" value="8"> Grappling Hook<br/> 
                <input type="checkbox" name="theGear[]" value="9"> Hammer<br/> 
                <input type="checkbox" name="theGear[]" value="10"> Helmet<br/> 
                <input type="checkbox" name="theGear[]" value="11"> Holy Symbol, wooden<br/> 
                <input type="checkbox" name="theGear[]" value="12"> Holy Symbol, silver<br/> 
                <input type="checkbox" name="theGear[]" value="13"> Holy Water, vial<br/> 
                <input type="checkbox" name="theGear[]" value="14"> Lantern<br/> 
                <input type="checkbox" name="theGear[]" value="15"> Mirror (small), steel<br/> 
                <input type="checkbox" name="theGear[]" value="16"> Oil (lamp), 1 pint<br/> 
                <input type="checkbox" name="theGear[]" value="17"> Pole, 10 ft.<br/> 
                <input type="checkbox" name="theGear[]" value="18"> Rations, trail (1 week)<br/> 
                <input type="checkbox" name="theGear[]" value="19"> Rations, dry (1 week)<br/> 
                <input type="checkbox" name="theGear[]" value="20"> Rope (50 ft.), hemp<br/> 
                <input type="checkbox" name="theGear[]" value="21"> Rope (50 ft.), silk<br/> 
                <input type="checkbox" name="theGear[]" value="22"> Sack (15 lb.)+<br/> 
                <input type="checkbox" name="theGear[]" value="23"> Sack (30 lb.)+<br/> 
                <input type="checkbox" name="theGear[]" value="24"> Shovel<br/> 
                <input type="checkbox" name="theGear[]" value="25"> Spellbook (blank)<br/> 
                <input type="checkbox" name="theGear[]" value="26"> Spikes (12), iron<br/> 
                <input type="checkbox" name="theGear[]" value="27"> Spikes (12), wooden<br/> 
                <input type="checkbox" name="theGear[]" value="28"> Tent<br/> 
                <input type="checkbox" name="theGear[]" value="29"> Thieves' Tools<br/>  
                <input type="checkbox" name="theGear[]" value="30"> Torches (6)<br/>  
                <input type="checkbox" name="theGear[]" value="31"> Waterskin<br/>  
                <input type="checkbox" name="theGear[]" value="32"> Woldsbane, bunch<br/>  
                <br/>
                <span class="weaponSubHead">Ammo:</span><br/><br/>
                <input type="checkbox" name="theGear[]" value="33"> Quiver (20 arrows)<br/>  
                <input type="checkbox" name="theGear[]" value="34"> Silver arrows (5)<br/>   
                <input type="checkbox" name="theGear[]" value="35"> Bolt case (30 bolts)<br/>   
                <input type="checkbox" name="theGear[]" value="36"> Pouch (20 stones)<br/>  
                </div>
               <p><span class="footnote3">+Carrying capacity of item.</span></p>
                
                <br/>
                <br/>

            
		<div class="content8">
            
			  
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_characters2"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            </div>
            </div>
            
				
            </div>
            
            </form>
            
            
            
                
                
                	
                <script>
        
                    $("#generate_characters2").click(function(){
         
    
                        $("#elfForm").attr('action', "character/wb_elf.php");
    
                    });
                    
                </script>
        
                
                
    </section>


</body>
</html>