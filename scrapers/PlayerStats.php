<?php
    // ottdyl83 - 04/13/2024
    require('simple_html_dom.php');

    if(isset($_POST["search"]))
    {
        $html = file_get_html($_POST["search"]);
        $teamHtml = 0;
        $name = $html->find('h1');
        // title
        echo '<h1>Name (for confirmation)</h1>';
        foreach($html->find('h1') as $name)
        {
            echo $name->plaintext;
        }
        // description
        echo '<h1>Data</h1>';
        foreach($html->find('div[id=div_rushing_and_receiving]') as $div)
        {
            foreach($div->find('tbody') as $tbody)
            {
                foreach($tbody->find('tr') as $tr)
                {
                    $children = $tr->children;
                    foreach($children as $child)
                    {
                        if($child == $tr->children(0))
                        {
                            //do nothing
                        }
                        else if(trim($child->plaintext == ""))
                        {
                            echo '0,';
                        }
                        else
                        {
                            echo trim($child->plaintext) . ',';
                        }
                    }
                    echo "</br>";
                    // foreach($tr->find('th[data-stat="year_id"]') as $year);
                    // {
                    //     echo $year->plaintext;
                    // }
                    
                }
                // foreach($tbody->find('th[data-stat="year_id"]') as $year)
                // {
                //     echo trim($year->plaintext) . ',';
                // }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFL Runningback Data Collection</title>
</head>
<body>
    <h2>***PLAYER STATS***</h2>
    <h2>Start by looking up a team's historical lineups.</h2>
    <h2>For each *unique* starting RB, go to their stats page and enter the link below.</h2>
    <h2>Be sure to note the rest of the lineup, head coach, and offensive coordinator.</h2>
    <h2>Copy/paste the data into the spreadsheet, and fill in any missing fields appropriately.</h2>
    <h2>Remember that 2023 data will go in our test set!</h2>
    <form action="" method="POST">
        <input type="text" name="search">
        <br/>
        <br/>
        <button>Enter Pro Football Reference Link for Player</button>
    </form>
    <p><a href='http://elvis.rowan.edu/~ottdyl83/AdvancedDatabases/Assignment11/DataMining.php'>Click here to go to Coaches and Roster Scraper</a></p>
</body>
</html>