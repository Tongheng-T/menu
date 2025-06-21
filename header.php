<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Menu Coffee & Drinks</title>
    <link rel="stylesheet" href="css/staye.css">

    <style>
        body {
            font-family: "Khmer OS", Arial, sans-serif;
            background-color: #fdfaf6;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }


        .container {
            max-width: 700px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            color: #6f4e37;
        }

        h2 {
            color: #6f4e37;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
            margin-top: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 8px 0;
            border-bottom: 1px dotted #ccc;
            display: flex;
            justify-content: space-between;
        }

        .price {
            color: #888;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #666;
            padding-bottom: 20px;
        }

        footer a {
            color: #6f4e37;
            text-decoration: none;
            font-weight: bold;
        }

        /* mu */
         .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }
        .menu-item {
            border: 1px solid #eee;
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
            transition: transform 0.2s;
        }
        .menu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .menu-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .menu-item .content {
            padding: 15px;
            text-align: center;
        }
        .menu-item .title {
            font-size: 1.1em;
            color: #6f4e37;
            margin-bottom: 8px;
        }
        .menu-item .price {
            color: #888;
            font-weight: bold;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar .menu {
                display: none;
                flex-direction: column;
                background-color: #6f4e37;
                position: absolute;
                top: 60px;
                right: 20px;
                width: 200px;
                padding: 10px;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            }

            .navbar .menu.active {
                display: flex;
            }

            .menu-toggle {
                display: flex;
            }
        }
    </style>
</head>