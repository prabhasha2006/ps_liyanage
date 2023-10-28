<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" id="themecss" href="./lite-mode-0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Canvas</title>
</head>
<body>
    <div class="header">
        <h2 class="book-title">
            Canvas ~ P_S_Liyanage <button class="close-head" onclick="closeHead()">x</button>
        </h2>
    </div>
    <div class="scroll-to-patuna">
        <button onclick="theme()">
            <i id="darkmode" class='fa fa-moon-o'></i>
            <i style="display: none;" id="litemode" class='fa fa-sun-o'></i>
        </button>
        <button onclick="window.scrollTo(0, window.innerHeight*2);">පටුන</button>
    </div>
    <div class="the-body">
        <div class="pitakaware">
            <img src="https://telegra.ph/file/ce9aa21991f8ad50e167f.jpg" alt="">
        </div>
        <div class="selector">
            <li>පිදුම</li>
            <p>නොයෙක් දුක් කම්කටොළු
                විඳ දරාගනිමින්
                මාගේ අනාගතය
                යහපත් කිරීමට
                ඇප කැප වන,
                මාගේ අම්මාටත් තාත්තාටත් ය.
            </p>
        </div>
        <div class="selector">
            <h2>පටුන</h2>
            <li onclick="scrolling(1)">1 වන පරිච්ඡේදය</li>
            <li onclick="scrolling(2);">2 වන පරිච්ඡේදය</li>
            <li onclick="scrolling(3);">3 වන පරිච්ඡේදය</li>
            <li onclick="scrolling(4);">4 වන පරිච්ඡේදය</li>
        </div>
        <div class="story">
            <h2>1 වන පරිච්ඡේදය</h2>
            <pre class="page"><?php
                // URL of the Pastebin content you want to fetch
                $pastebinURL = 'https://pastebin.com/raw/WeZPJwbr';

                // Fetch the content from Pastebin
                $content = file_get_contents($pastebinURL);

                if ($content !== false) {
                    // Set the appropriate content type
                    //header('Content-Type: text/plain');
                    
                    // Echo the content to the client
                    echo $content;
                } else {
                    http_response_code(500);
                    echo 'Failed to fetch Pastebin text.';
                }
                ?></pre>
        </div>
        <div class="story">
            <h2>2 වන පරිච්ඡේදය</h2>
            <pre class="page"><?php
                // URL of the Pastebin content you want to fetch
                $pastebinURL = 'https://pastebin.com/raw/rZCUekEr';

                // Fetch the content from Pastebin
                $content = file_get_contents($pastebinURL);

                if ($content !== false) {
                    // Set the appropriate content type
                    //header('Content-Type: text/plain');
                    
                    // Echo the content to the client
                    echo $content;
                } else {
                    http_response_code(500);
                    echo 'Failed to fetch Pastebin text.';
                }
                ?></pre>
        </div>
        <div class="story">
            <h2>3 වන පරිච්ඡේදය</h2>
            <pre class="page"><?php
                // URL of the Pastebin content you want to fetch
                $pastebinURL = 'https://pastebin.com/raw/csjnE5JE';

                // Fetch the content from Pastebin
                $content = file_get_contents($pastebinURL);

                if ($content !== false) {
                    // Set the appropriate content type
                    //header('Content-Type: text/plain');
                    
                    // Echo the content to the client
                    echo $content;
                } else {
                    http_response_code(500);
                    echo 'Failed to fetch Pastebin text.';
                }
                ?></pre>
        </div>
        <div class="story">
            <h2>4 වන පරිච්ඡේදය</h2>
            <pre class="page"><?php
                // URL of the Pastebin content you want to fetch
                $pastebinURL = 'https://pastebin.com/raw/Kpqr1Uqt';

                // Fetch the content from Pastebin
                $content = file_get_contents($pastebinURL);

                if ($content !== false) {
                    // Set the appropriate content type
                    //header('Content-Type: text/plain');
                    
                    // Echo the content to the client
                    echo $content;
                } else {
                    http_response_code(500);
                    echo 'Failed to fetch Pastebin text.';
                }
                ?></pre>
        </div>
    </div>
    <script src="./kumuthu-2.js"></script>
</body>
</html>