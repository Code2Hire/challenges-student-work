<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Red Ventures has partnered with the cable provider "Camcost" and will market and sell
     * bundles of their TV and internet packages.
     *
     * Camcost offers three TV packages:
     * "Budget" for $19.99, "Regular" for $39.99 and "Couch Potato" for $79.99.
     *
     * The "Couch Potato" package is only available in Utah and Oregon.
     *
     * Camcost offers two internet packages: "SlowNet" and "FastNet". However, the price varies depending on
     * the customer's location.
     * For customers living in North or South Carolina, "SlowNet" is $29.99 and "FastNet" is $59.99.
     * For customers anywhere else in the US, "SlowNet" is $24.99 and "FastNet" is $54.99.
     *
     * A "bundle" is considered to be the combination of one internet package and one TV package.
     * For example, "Budget + SlowNet" is a bundle combining the "Budget" TV package and the "SlowNet" internet package.
     * "Couch Potato + FastNet" is a bundle combining the "Couch Potato" TV package and the "FastNet" internet package.
     *
     * Create a class named "CamcostPricing" with a the public function: "getBundlesByZip".
     *
     * "getBundlesByZip" should take a customer's zip code and return all the possible bundles that the customer
     * is eligible for, along with the cost of each bundle.
     *
     * For example, for a customer with the zip "28277" the function should return an array that looks like:
     *
     * array(
     *     "Budget + SlowNet" => 49.98,
     *     "Budget + FastNet" => 79.98,
     *     "Regular + SlowNet" => 69.98,
     *     "Regular + FastNet" => 99.98
     * )
     *
     * This site will help you to know which zip codes belong to which states:
     * @see https://smartystreets.com/articles/zip-codes-101
     */


    ///////////////////////////
    // Put your code here!
    ///////////////////////////
    
    class CamcostPricing { //creates pricing class
        public function getBundlesByZip($zip) { //names custom method
            
            if (is_int($zip)) { //ensures data entered into $zip is an integer
                
                $zip = strval($zip);
                
                if (strpos($zip, '97') === 0 || strpos($zip, '84') === 0) { //if condition for utah and oregon
                    echo "97";
                    $budget = 19.99;
                    $regular = 39.99;
                    $couchPotato = 79.99;
                    $slowNet = 24.99;
                    $fastNet = 54.99;
                    
                    return array( //sets array that will be returned
                        "Budget + SlowNet" => $budget + $slowNet,
                        "Budget + FastNet" => $budget + $fastNet,
                        "Regular + SlowNet" => $regular + $slowNet,
                        "Regular + FastNet" => $regular + $fastNet,
                        "Couch Potato + SlowNet" => $couchPotato + $slowNet,
                        "Couch Potato + FastNet" => $couchPotato + $fastNet
                        );
                } elseif (strpos($zip, '28') === 0 || strpos($zip, '29') === 0) { //elseif for nc and sc
                    
                    $budget = 19.99;
                    $regular = 39.99;
                    $slowNet = 29.99;
                    $fastNet = 59.99;
                    
                    return array(
                        "Budget + SlowNet" => $budget + $slowNet, //array that will be returned
                        "Budget + FastNet" => $budget + $fastNet,
                        "Regular + SlowNet" => $regular + $slowNet,
                        "Regular + FastNet" => $regular + $fastNet
                        );
                } else { //else for all other states
                    
                    $budget = 19.99;
                    $regular = 39.99;
                    $slowNet = 24.99;
                    $fastNet = 54.99;
                    
                    return array( //array that will be returned
                        "Budget + SlowNet" => $budget + $slowNet,
                        "Budget + FastNet" => $budget + $fastNet,
                        "Regular + SlowNet" => $regular + $slowNet,
                        "Regular + FastNet" => $regular + $fastNet,
                        );
                }
            } else { //else for is_int that gives error message if $zip entered is not a complete integer
                
                echo "PASS IN A REAL ZIP!!";
                return;
            }
        }
    }


    $pricing = new CamcostPricing;
    
    function showBundles($bundles) {
        foreach ($bundles as $bundleName=>$bundleCost) {
            echo "<p>$bundleName: \$$bundleCost</p>";
        }
    }

    $zip = 28277;
    $bundles = $pricing->getBundlesByZip($zip);
    echo "<h3>Camcost Bundles for customers in $zip</h3>";
    showBundles($bundles);
    
    $zip = 84101;
    $bundles = $pricing->getBundlesByZip($zip);
    echo "<h3>Camcost Bundles for customers in $zip</h3>";
    showBundles($bundles);

    

    ?>

</p>

</body>
</html>