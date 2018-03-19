<!DOCTYPE html>
<html lang="en">
<head>
    <!--
          <link rel="stylesheet" type="text/css" href="public/bootstrap/style.css">
        Tried working like this, and for one reason, the CSS file loads on some pages and others not, and i wasn't able to find out why
        after hours of troubleshooting, i decided to put all the styles in a style tag, and it works-->

    <title>Web project</title>
    <style>
        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 5px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
            text-align: center;
        }

        img {
            display: block;
            margin: auto;
            width: 200px;
            height: 120px;;
        }

        a.button {
            background-color: whitesmoke;
            border: none;
            color: black;
            padding: 12px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
            border: 2px solid #4CAF50;
        }

        a.button:hover {
            background-color: #4CAF50;
            color: white;
        }

        #welcome {
            color: #444;
            background-color: transparent;
            border-bottom: 2px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
            text-align: center;
        }

        footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0
        }

        #inputs {
            text-align: left;
            padding: 14px 15px 10px 15px;
        }

        #persons_events {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #persons_events td, #persons_events th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #persons_events tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #persons_events tr:hover {
            background-color: #ddd;
        }

        #persons_events th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

        body {
            background: #f5f5f5 !important;
            margin: 0px auto 0px auto;
            width: auto;
        }

        input[type="text"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        input[type="password"] {
            margin-bottom: 20px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

    </style>

