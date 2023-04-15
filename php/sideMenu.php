<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Animated Side Menu</title>
    <style>
        /* CSS for side menu */
        .side-menu {
            width: 200px;
            height: 100%;
            background-color: #f8f8f8;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 9999;
            overflow-y: auto;
            padding: 20px;
            box-sizing: border-box;
        }

        /* CSS for menu items */
        .side-menu a {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #e9e9e9;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        /* CSS for menu items hover effect */
        .side-menu a:hover {
            background-color: #ccc;
        }

        /* CSS for content area */
        .content {
            margin-left: 200px;
            padding: 20px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<div class="side-menu">
    <a href="#" onclick="showContent(1)">Section 1</a>
    <a href="#" onclick="showContent(2)">Section 2</a>
    <a href="#" onclick="showContent(3)">Section 3</a>
    <a href="#" onclick="showContent(4)">Section 4</a>
    <a href="#" onclick="showContent(5)">Section 5</a>
    <a href="#" onclick="showContent(6)">Section 6</a>
    <a href="#" onclick="showContent(7)">Section 7</a>
    <a href="#" onclick="showContent(8)">Section 8</a>
</div>
<div class="content">
    <div id="content1">Content for Section 1</div>
    <div id="content2">Content for Section 2</div>
    <div id="content3">Content for Section 3</div>
    <div id="content4">Content for Section 4</div>
    <div id="content5">Content for Section 5</div>
    <div id="content6">Content for Section 6</div>
    <div id="content7">Content for Section 7</div>
    <div id="content8">Content for Section 8</div>
</div>
<script>
    // JavaScript to handle menu item click
    function showContent(section) {
        // Hide all content divs
        var contentDivs = document.querySelectorAll('.content div');
        for (var i = 0; i < contentDivs.length; i++) {
            contentDivs[i].style.display = 'none';
        }

        // Show selected content div
        var selectedContentDiv = document.getElementById('content' + section);
        selectedContentDiv.style.display = 'block';
    }
</script>
</body>
</html>
