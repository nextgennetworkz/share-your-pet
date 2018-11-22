<?php
/**
 * @copyright Copyright (c) 2015, Google Inc.
 * @link      https://www.google.com/recaptcha
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
require __DIR__ . '/appengine-https.php';
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,minimum-scale=1">
<link rel="shortcut icon" href="https://www.gstatic.com/recaptcha/admin/favicon.ico" type="image/x-icon"/>
<link rel="canonical" href="https://recaptcha-demo.appspot.com/">
<script type="application/ld+json">
    { "@context": "http://schema.org", "@type": "WebSite", "name": "reCAPTCHA demo", "url": "http://recaptcha-demo.appspot.com/" }




</script>
<meta name="description" content="reCAPTCHA demo"/>
<meta property="og:url" content="https://recaptcha-demo.appspot.com/"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="reCAPTCHA demo"/>
<meta property="og:description" content="Examples of the reCAPTCHA client."/>
<link rel="stylesheet" type="text/css" href="/examples.css">
<title>reCAPTCHA demo</title>

<header>
    <h1>reCAPTCHA demo</h1>
</header>
<main>
    <p>Try out the various forms of <a href="https://www.google.com/recaptcha/">reCAPTCHA</a>.</p>
    <p>You can find the source code for these examples on GitHub in <kbd><a href="https://github.com/google/recaptcha">google/recaptcha</a></kbd>.
    </p>
    <ul>
        <li><h2>reCAPTCHA v2</h2>
            <ul>
                <li><a href="/recaptcha-v2-checkbox.php">"I'm not a robot" checkbox</a></li>
                <li><a href="/recaptcha-v2-checkbox-explicit.php">"I'm not a robot" checkbox - Explicit render</a></li>
                <li><a href="/recaptcha-v2-invisible.php">Invisible</a></li>
            </ul>
        </li>
        <li><h2>reCAPTCHA v3</h2>
            <ul>
                <li><a href="/recaptcha-v3-request-scores.php">Request scores</a></li>
            </ul>
        </li>
    </ul>
</main>

<!-- Google Analytics - just ignore this -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123057962-1"></script>
<script>window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-123057962-1');</script>
