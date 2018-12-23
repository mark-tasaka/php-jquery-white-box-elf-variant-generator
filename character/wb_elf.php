<!DOCTYPE html>
<html>
<head>
<title>White Box RPG Elf (Variant) Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="White Box RPG Elf (Variant) Character Generator. Goblinoid Games.">
	<meta name="keywords" content="White Box RPG, Goblinoid Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2018">
		

	<link rel="stylesheet" type="text/css" href="css/wb_elf.css">
	<link rel="stylesheet" type="text/css" href="css/wb_elf_post.css">
    
    
    <script type="text/javascript" src="./js/dieRoll.js"></script>
    <script type="text/javascript" src="./js/modifiers.js"></script>
    <script type="text/javascript" src="./js/hitPoinst.js"></script>
    <script type="text/javascript" src="./js/primeReq.js"></script>
    <script type="text/javascript" src="./js/abilityScoreAddition.js"></script>
    <script type="text/javascript" src="./js/attackBonus.js"></script>
    <script type="text/javascript" src="./js/addLanguages.js"></script>
    <script type="text/javascript" src="./js/classAbilities.js"></script>
    
    
    
</head>
<body>
    
    <!--PHP-->
    <?php
    
    include 'php/armour.php';
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/coins.php';
    include 'php/classDetails.php';
    include 'php/clothing.php';
    include 'php/characterRace.php';
    include 'php/demiHumanLevelLimit.php';
    include 'php/movementRate.php';
    include 'php/thaco.php';
    include 'php/abilityScoreGen.php';
    include 'php/spells.php';
    
    
        if(isset($_POST["theCharacterName"]))
        {
            $characterName = $_POST["theCharacterName"];
    
        }
    

        /*
        if(isset($_POST["theCharacterRace"]))
        {
            $characterRace = $_POST["theCharacterRace"];
        }*/
    
    $characterRace = "Elf";
    
            
        if(isset($_POST["theAlignment"]))
        {
            $alignment = $_POST["theAlignment"];
        }
    
        if(isset($_POST["theLevel"]))
        {
            $level = $_POST["theLevel"];
        
        } 
    
            $level = levelLimit ($characterRace, $level);
    
    
        if(isset($_POST["theSavingThrows"]))
        {
            $saveThrowOption = $_POST["theSavingThrows"];
        
        } 
    
        
        if(isset($_POST["theAbilityScore"]))
        {
            $abilityScoreGen = $_POST["theAbilityScore"];
        
        } 
    
    $dieType = generationMethod ($abilityScoreGen)[0];
    $numberDie = generationMethod ($abilityScoreGen)[1];
    $dieRemoved = generationMethod ($abilityScoreGen)[2];
    $valueAdded = generationMethod ($abilityScoreGen)[3];
    
    /*
    echo "Die Sides: " . $dieType;
    echo "<br/>Die Numbers: " . $numberDie;
    echo "<br/>Die removed: " . $dieRemoved;
    echo "<br/>Value added: " . $valueAdded;
    */
    
    $generationMessage = generationMesssage ($abilityScoreGen);
    
    
    
    $exNext = experienceNextLevel($level);
    

    
        if(isset($_POST["theArmour"]))
        {
            $armour = $_POST["theArmour"];
        }
    
        $armourName = getArmour($armour)[0];
        $armourDefense = getArmour($armour)[1];
        $armourWeight = getArmour($armour)[2];
    
    
        $totalAcDefense = $armourDefense;
        $totalArmourWeight =  $armourWeight;
    
        $armourDefense = removeZero($armourDefense);
        $armourWeight = removeZero($armourWeight);
    
    
        if(isset($_POST["theGold"]))
        {
            $coins = $_POST["theGold"];
        }
    
        $coinQuantity = getCoins($coins)[0];
        $coinType = getCoins($coins)[1];
        $coinQuantity2 = getCoins($coins)[2];
        $coinType2 = getCoins($coins)[3];
    
    
         
        $weaponArray = array();
        $weaponNames = array();
        $weaponDamage = array();
        $weaponWeight = array();
    
    
        if(isset($_POST["theWeapons"]))
        {
            foreach($_POST["theWeapons"] as $weapon)
            {
                array_push($weaponArray, $weapon);
            }
        }
    
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
        
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
    $totalWeaponWeight = 0;
    
    foreach($weaponArray as $select)
    {
        array_push($weaponWeight, getWeapon($select)[2]);
        $totalWeaponWeight += getWeapon($select)[2];
    }
    
    

        $gearArray = array();
        $gearNames = array();
        $gearWeight = array();
    
    
        if(isset($_POST["theGear"]))
        {
            foreach($_POST["theGear"] as $weapon)
            {
                array_push($gearArray, $weapon);
            }
        }
    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }
        
        $totalGearWeightOnly = 0;
    
        foreach($gearArray as $select)
        {
            array_push($gearWeight, getGear($select)[1]);
            $totalGearWeightOnly += getGear($select)[1];
        }

    
    $totalGearWeight = 10;
    
    $totalWeaponArmourWeight = $totalArmourWeight + $totalWeaponWeight; 
    
    
    $totalWeightCarried = $totalWeaponArmourWeight + $coinQuantity + $coinQuantity2 + $totalGearWeight;
    
    $saveMatrixFighter = savingThrowMatrixFighter ($level);
    $saveMatrixMagicUser = savingThrowMatrixMagicUser ($level);

    
    $characterRaceTraits = demiHumanTraits ($characterRace);
    
    $movementRate = moveRate ($totalWeightCarried, $characterRace);
    
    $thaco = thaco($level);
    
    $halflingBonus = missileBonusHalfling ($characterRace);
    
    $dwarfSaveMagic = dwarfSaveMod ($characterRace);
    
    $spellLevel1 = spellLevels($level)[0];
    $spellLevel2 = spellLevels($level)[1];
    $spellLevel3 = spellLevels($level)[2];
    
    $spellLine = spellLine ($level);
    
    $spellsForLevel1 = spellsEachLevel($level)[0];
    $spellsForLevel2 = spellsEachLevel($level)[1];
    $spellsForLevel3 = spellsEachLevel($level)[2];
    
    $spellLevelTitle = spellHeader1 ($level);
    $spellNumberTitle = spellHeader2 ($level);
    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
           
		<span id="strength"></span>
		<span id="dexterity"></span> 
		<span id="constitution"></span> 
		<span id="intelligence"></span>
		<span id="wisdom"></span>
       <span id="charisma"></span>
       
       
           
		<span id="strengthMod"></span>
		<span id="dexterityMod"></span> 
		<span id="constitutionMod"></span> 
		<span id="intelligenceMod"></span>
		<span id="wisdomMod"></span>
       <span id="charismaMod"></span>
		  
       
       <span id="race">
           <?php
           echo $characterRace;
           ?>
       </span>
       
       <span id="dieRollMethod"></span>

       
       <span id="class">Elf (Variant)</span>
       
       
       
       <span id="exNextLevel">
           <?php
           echo $exNext;
           ?>
       
       </span>
       
       
       <span id="meleeAc0"></span>
       <span id="meleeAc1"></span>
       <span id="meleeAc2"></span>
       <span id="meleeAc3"></span>
       <span id="meleeAc4"></span>
       <span id="meleeAc5"></span>
       <span id="meleeAc6"></span>
       <span id="meleeAc7"></span>
       <span id="meleeAc8"></span>
       <span id="meleeAc9"></span>
       
       <span id="missileAttack"></span>
       
       
       <span id="elfAbility"></span>
       

       <span id="descendingAc"></span> 
       <span id="ascendingAc"></span>
       
       <span id="addLanguages"></span>
       
       <span id="hitPoints"></span>
       
       <span id="hitDie"></span>
       
       <span id="singleSave">
           <?php
           
           if($saveThrowOption == 1)
           {
               echo singleSave ($level); 
           }
           else
           {
               echo "";
           }
           
           ?>
       </span>
       
       
              
       <span id="saveMatrix">
           <?php
           
           if($saveThrowOption == 1)
           {
               echo ""; 
           }
           else if($saveThrowOption == 2)
           {
               echo $saveMatrixFighter[0];
               echo "<br/>";
               echo $saveMatrixFighter[1] - $dwarfSaveMagic;
               echo "<br/>";
               echo $saveMatrixFighter[2];
               echo "<br/>";
               echo $saveMatrixFighter[3];
               echo "<br/>";
               echo $saveMatrixFighter[4] - $dwarfSaveMagic;
           }
           else if($saveThrowOption == 3)
           {
               echo $saveMatrixMagicUser[0];
               echo "<br/>";
               echo $saveMatrixMagicUser[1] - $dwarfSaveMagic;
               echo "<br/>";
               echo $saveMatrixMagicUser[2];
               echo "<br/>";
               echo $saveMatrixMagicUser[3];
               echo "<br/>";
               echo $saveMatrixMagicUser[4] - $dwarfSaveMagic;
           }
           
           
           ?>
       </span>
       
                     
       <span id="saveMatrixOption">
           <?php
           
           if($saveThrowOption == 1)
           {
               echo ""; 
           }
           else if($saveThrowOption == 2)
           {
               echo "Fighter Saving Throw Matrix";
           }
           else if($saveThrowOption == 3)
           {
               echo "Magic-User Saving Throw Matrix";
           }
           ?>
       </span>
       
              <span id="saveMatrixDes">
           <?php
           
           if($saveThrowOption == 1)
           {
               echo ""; 
           }
           else
           {
               echo "vs. Death/Poison";
               echo "<br/>";
               echo "vs. Wands/Rays";
               echo "<br/>";
               echo "vs. Paralyze/Stone";
               echo "<br/>";
               echo "vs. Dragon Breath";
               echo "<br/>";
               echo "vs. Spells/Staffs";
           }
           
           ?>
       </span>
       
        <span id="saveMatrixTitle">
           <?php
           
           if($saveThrowOption == 1)
           {
               echo ""; 
           }
           else
           {
               echo "Saving Throws";
           }
           
           ?>
       </span>
       
       <span id="level">
           <?php
                echo $level;
           ?>
        </span>
       

       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>
       
              
         <span id="alignment">
           <?php
                echo $alignment;
           ?>
        </span>

              
       <span id="armourName">
           <?php
                echo $armourName;
           ?>
        </span>
       
       <span id="exBonus"></span>
              

              
       <span id="totalArmourWeight">
            <?php
                echo "Total weapons/armour<br/>weight: " . $totalWeaponArmourWeight . " lbs";
            ?>
       </span>
       
       
                     
       <span id="gearWeight">
            <?php
                echo "Total gear weight: " . $totalGearWeight . " lbs";
            ?>
       </span>
       
       
       <span id="weaponsList">
           <?php
           $val1 = 0;
           $val2 = 0;
           $val3 = 0;
           
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
               $val1 = isWeaponTwoHanded($theWeapon, $val1);
               $val2 = isWeaponBastardSword($theWeapon, $val2);
           }
           
           $val3 = $val1 + $val2;
           
           $weaponNotes = weaponNotes($val3);
           
           ?>  
        </span>
       
       <span id="weaponNotes">
           <?php
                echo $weaponNotes;
           ?>
        </span>
            
       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
       

       <span id="gearList">
           <?php
           
           foreach($gearNames as $theGear)
           {
              echo $theGear;
               echo "<br/>";
           }
           ?>
       </span>
           


       
       <span id="totalWeightCarried">
           <?php
           echo "Weight carried: " . $totalWeightCarried . " lbs / Movement Rate: " . $movementRate;
           ?>
       </span>
              
       
       <span id="wealth">
           <?php
           
           if($coinQuantity === 0)
           {
               echo "";
           }
           else
           {
           echo ($coinQuantity * 10) . $coinType;
           echo "<br/>";
           echo ($coinQuantity2 * 10) . $coinType2;
               
           }
           ?>
       </span>
       
       <span id="coinWeight">
           <?php
               
           if($coinQuantity === 0)
           {
               echo "";
           }
           else
           {
                echo "Coin weight: " . ($coinQuantity+$coinQuantity2) . " lbs";
           }
           ?>
       </span>
       

       
       <span id="characterRaceTrait">
           <?php
           echo $characterRaceTraits;
           ?>
       </span>
       
       <span id="hirelings"></span>
       
       <span id="abilityScoreGeneration">
            <?php
           echo $generationMessage;
           ?>
       </span>
       
       
       <span id=spellLevelTitle>
           <?php
           echo $spellLevelTitle;
           ?>
       </span>
       
       
       <span id=spellNumberTitle>
           <?php
           echo $spellNumberTitle;
           ?>
       </span>
       
   
       <span id="spellsLevel1">
           <?php
           echo $spellLevel1;
           ?>
       </span>
       
       <span id="spellsLevel2">
           <?php
           echo $spellLevel2;
           ?>
       </span> 
       
       <span id="spellsLevel3">
           <?php
           echo $spellLevel3;
           ?>
       </span>       
       
       
       <span id="spellLine">
       
           <?php
           echo $spellLine;
           ?>
           
       </span>
       
       
       <span id="spellsForLevel1">
       <?php
           echo $spellsForLevel1;
           ?>
       </span>
       
       <span id="spellsForLevel2">
       <?php
           echo $spellsForLevel2;
           ?>
       </span>
       
       <span id="spellsForLevel3">
       <?php
           echo $spellsForLevel3;
           ?>
       </span>
       
       

       
	</section>
	

		
  <script>
      

	  
	/*
	 Character() - Elf Character Constructor
	*/
	function Character() {
        
        let strength = rollDice(<?php echo $dieType ?> ,<?php echo $numberDie ?>, <?php echo $dieRemoved ?>, <?php echo $valueAdded ?>);
        let	intelligence = rollDice(<?php echo $dieType ?> ,<?php echo $numberDie ?>, <?php echo $dieRemoved ?>, <?php echo $valueAdded ?>);
        let	wisdom = rollDice(<?php echo $dieType ?> ,<?php echo $numberDie ?>, <?php echo $dieRemoved ?>, <?php echo $valueAdded ?>);
        let dexterity = rollDice(<?php echo $dieType ?> ,<?php echo $numberDie ?>, <?php echo $dieRemoved ?>, <?php echo $valueAdded ?>);
        let constitution = rollDice(<?php echo $dieType ?> ,<?php echo $numberDie ?>, <?php echo $dieRemoved ?>, <?php echo $valueAdded ?>);
        let	charisma = rollDice(<?php echo $dieType ?> ,<?php echo $numberDie ?>, <?php echo $dieRemoved ?>, <?php echo $valueAdded ?>);
        
        let strengthMod = abilityScoreModifier(strength);
        let intelligenceMod = abilityScoreModifier(intelligence);
        let wisdomMod = abilityScoreModifier(wisdom);
        let dexterityMod = abilityScoreModifier(dexterity);
        let constitutionMod = abilityScoreModifier(constitution);
        let charismaMod = abilityScoreModifier(charisma);
        let level = '<?php echo $level ?>';
        let race = '<?php echo $characterRace ?>';
        let armour = '<?php echo $armourName ?>';
        let halflingMissile = <?php echo $halflingBonus ?>;
        let extraLanguages = addLanguages (intelligence);
		
		let elfCharacter = {
			"strength": strength,
			"dexterity": dexterity,
			"constitution": constitution,
			"intelligence": intelligence,
			"wisdom": wisdom,
			"charisma": charisma,
            "strengthModifer": addModifierSign(strengthMod),
            "intelligenceModifer": addModifierSign(intelligenceMod),
            "wisdomModifer": addModifierSign(wisdomMod),
            "dexterityModifer": addModifierSign(dexterityMod),
            "constitutionModifer": addModifierSign(constitutionMod),
            "charismaModifer": addModifierSign(charismaMod),
            "acBase": 11 + dexterityMod,
            "ascendingAC": <?php echo $totalAcDefense ?> + 10 + dexterityMod,
            "descendingAC": 9 - <?php echo $totalAcDefense ?> - dexterityMod,
            "hp": getHitPoints (level, constitutionMod),
            "hitDie": getHitDiceAmount(level),
            "meleeHitAC0": <?php echo $thaco ?> - (strengthMod),
            "meleeHitAC1": <?php echo $thaco ?> - (strengthMod) - 1,
            "meleeHitAC2": <?php echo $thaco ?> - (strengthMod) - 2,
            "meleeHitAC3": <?php echo $thaco ?> - (strengthMod) - 3,
            "meleeHitAC4": <?php echo $thaco ?> - (strengthMod) - 4,
            "meleeHitAC5": <?php echo $thaco ?> - (strengthMod) - 5,
            "meleeHitAC6": <?php echo $thaco ?> - (strengthMod) - 6,
            "meleeHitAC7": <?php echo $thaco ?> - (strengthMod) - 7,
            "meleeHitAC8": <?php echo $thaco ?> - (strengthMod) - 8,
            "meleeHitAC9": <?php echo $thaco ?> - (strengthMod) - 9,
            "rangedAttak": addModifierSign(dexterityMod + halflingMissile),
            "moreLanguages": extraLanguages,
			"specialAbility": specialAbility(),
            "xpBonus": exBonus (intelligence, wisdom, charisma) + "%",
            "hirelings": hirelings (charisma)

		};
	    if(elfCharacter.hitPoints <= 0 ){
			elfCharacter.hitPoints = 1;
		}
		return elfCharacter;
	  
	  }
	  


  
       let imgData = "images/elf_character_sheet.png";
      
        $("#character_sheet").attr("src", imgData);
      

	  let data = Character();
		 
      $("#strength").html(data.strength);
      
      $("#intelligence").html(data.intelligence);
      
      $("#wisdom").html(data.wisdom);
      
      $("#dexterity").html(data.dexterity);
      
      $("#constitution").html(data.constitution);
      
      $("#charisma").html(data.charisma);
      
      
		 
      $("#strengthMod").html(data.strengthModifer);
      
      $("#intelligenceMod").html(data.intelligenceModifer);
      
      $("#wisdomMod").html(data.wisdomModifer);
      
      $("#dexterityMod").html(data.dexterityModifer);
      
      $("#constitutionMod").html(data.constitutionModifer);
      
      $("#charismaMod").html(data.charismaModifer);
      
      
      
      $("#dieRollMethod").html(data.dieRollMethod);
            
      $("#hitPoints").html(data.hp);
      $("#hitDie").html(data.hitDie);
      
      $("#ascendingAc").html(data.ascendingAC);
      $("#descendingAc").html(data.descendingAC);
      
      
      $("#meleeAc0").html(data.meleeHitAC0);
      $("#meleeAc1").html(data.meleeHitAC1);
      $("#meleeAc2").html(data.meleeHitAC2);
      $("#meleeAc3").html(data.meleeHitAC3);
      $("#meleeAc4").html(data.meleeHitAC4);
      $("#meleeAc5").html(data.meleeHitAC5);
      $("#meleeAc6").html(data.meleeHitAC6);
      $("#meleeAc7").html(data.meleeHitAC7);
      $("#meleeAc8").html(data.meleeHitAC8);
      $("#meleeAc9").html(data.meleeHitAC9);
      
      
      $("#missileAttack").html("Missile attack rolls: adjust 'to-Hit' by " + data.rangedAttak);
      
      $("#addLanguages").html(data.moreLanguages);
      
      $("#elfAbility").html(data.specialAbility);
      
      $("#exBonus").html(data.xpBonus);
      
      $("#hirelings").html(data.hirelings);


	 
  </script>
		
	
    
</body>
</html>