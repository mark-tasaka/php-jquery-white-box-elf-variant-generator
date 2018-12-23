<?php


function getGear($input)
{
    
        $a00 = array("Backpack (30 lb. capacity)", 0);
        $a01 = array("Bedroll", 0);
        $a02 = array("Belladonna, bunch", 3);
        $a03 = array("Wine (bottle)", 0);
        $a04 = array("Case (map/scroll)", 5);
        $a05 = array("Crowbar", 1);
        $a06 = array("Flint and steel", 4);
        $a07 = array("Garlic (1 lb.)", 1);
        $a08 = array("Grappling Hook", 4);
        $a09 = array("Hammer", 0);
        $a10 = array("Helmet", 0);
        $a11 = array("Holy Symbol, wooden", 0);
        $a12 = array("Holy Symbol, silver", 1);
        $a13 = array("Holy Water, vial", 10);
        $a14 = array("Lantern", 2);
        $a15 = array("Mirror (small), steel", 3);
        $a16 = array("Oil (lamp), 1 pint", 2);
        $a17 = array("Pole, 10 ft.", 1);
        $a18 = array("Rations, trail (1 week)", 0);
        $a19 = array("Rations, dry (1 week)", 1);
        $a20 = array("Rope (50 ft.), hemp", 1);
        $a21 = array("Rope (50 ft.), silk", 0);
        $a22 = array("Sack (15 lb. capacity)", 10);
        $a23 = array("Sack (30 lb. capacity)", 0);
        $a24 = array("Shovel", 0);
        $a25 = array("Spellbook (blank)", 1);
        $a26 = array("Spikes (12), iron", 10);
        $a27 = array("Spikes (12), wooden", 5);
        $a28 = array("Tent", 2);
        $a29 = array("Thieves' Tools", 0);
        $a30 = array("Torches (6)", 0);
        $a31 = array("Waterskin", 15);
        $a32 = array("Woldsbane, bunch", 35);
        $a33 = array("Quiver (20 arrows)", 7);
        $a34 = array("Silver arrows (5)", 1);
        $a35 = array("Bolt case (30 bolts)", 20);
        $a36 = array("Pouch (20 stones)", 10);

    
        $arr= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29, $a30, $a31, $a32, $a33, $a34, $a35, $a36);
        
        return $arr[$input];
}


?>