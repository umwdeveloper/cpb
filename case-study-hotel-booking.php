<?php
include_once "includes/functions.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Hotel Booking Nightmare: Overseas Visitor Left Stranded - Consumer Protection Bureau</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name='description' content='Exclusive investigation: How an Australian tourist was denied access to prepaid London accommodation, leaving her stranded in a foreign country.' />
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/case-study-hotel-booking.php">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://analytics.ahrefs.com/analytics.js" data-key="VTs14Xy/Kdyw0NN4JQulEw" defer="true"></script>

    <style>
        body {
            font-family: 'Nunito Sans', sans-serif;
            line-height: 1.7;
            color: #2c3e50;
            background: linear-gradient(135deg, #fefefe 0%, #f8f9fa 50%, #fefefe 100%);
            background-attachment: fixed;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(34, 58, 120, 0.02) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(229, 191, 32, 0.02) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
        }

        .magazine-hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            min-height: 75vh;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
        }

        .magazine-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(34, 58, 120, 0.85), rgba(42, 82, 152, 0.85));
            mix-blend-mode: multiply;
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }

        .magazine-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: clamp(2.8rem, 5.5vw, 5rem);
            line-height: 1.1;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
        }

        .magazine-subtitle {
            font-family: 'Nunito Sans', sans-serif;
            font-weight: 400;
            font-size: 1.5rem;
            opacity: 0.95;
            font-style: italic;
            margin-bottom: 2.5rem;
            max-width: 900px;
        }

        .exclusive-badge {
            background: linear-gradient(45deg, #e5bf20, #c9a71c);
            color: #223a78;
            padding: 12px 28px;
            border-radius: 30px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 1.5rem;
            box-shadow: 0 6px 20px rgba(229, 191, 32, 0.3);
        }

        .case-facts {
            background: linear-gradient(135deg, #fff8e1 0%, #ffffff 50%, #e3f2fd 100%);
            border: none;
            border-radius: 0;
            padding: 50px 40px;
            margin: 0 -40px 50px -40px;
            box-shadow: inset 0 0 30px rgba(0,0,0,0.03);
            position: relative;
        }

        .case-facts::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(45deg, #e5bf20, #c9a71c);
        }

        .case-facts::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(45deg, #223a78, #2a5298);
        }

        .fact-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #223a78;
            font-size: 1.8rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .fact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .fact-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            border-top: 4px solid #e5bf20;
            transition: transform 0.3s ease;
        }

        .fact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .fact-label {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #223a78;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .fact-value {
            font-family: 'Nunito Sans', sans-serif;
            font-weight: 700;
            color: #2c3e50;
            font-size: 1.1rem;
        }

        .section-header {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #223a78;
            font-size: 2.5rem;
            margin: 60px 0 35px;
            position: relative;
            padding-bottom: 20px;
        }

        .section-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100px;
            height: 4px;
            background: linear-gradient(45deg, #e5bf20, #c9a71c);
            border-radius: 2px;
        }

        .magazine-text {
            font-family: 'Nunito Sans', sans-serif;
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        .magazine-text:first-letter {
            font-family: 'Poppins', sans-serif;
            font-size: 4rem;
            font-weight: 700;
            color: #223a78;
            float: left;
            line-height: 1;
            margin: 8px 8px 0 0;
        }

        .pullquote {
            background: linear-gradient(135deg, #223a78 0%, #2a5298 100%);
            color: white;
            padding: 50px;
            margin: 60px -40px;
            font-style: italic;
            font-size: 1.5rem;
            font-weight: 400;
            border-radius: 0;
            position: relative;
            box-shadow: 0 20px 60px rgba(34, 58, 120, 0.15);
        }

        .pullquote::before {
            content: '\201C';
            font-size: 8rem;
            color: #e5bf20;
            position: absolute;
            top: -10px;
            left: 40px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            line-height: 1;
        }

        .pullquote::after {
            content: '\201D';
            font-size: 8rem;
            color: #e5bf20;
            position: absolute;
            bottom: -40px;
            right: 40px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            line-height: 1;
        }

        .pullquote-text {
            padding-left: 60px;
            font-family: 'Nunito Sans', sans-serif;
        }

        .pullquote-author {
            text-align: right;
            margin-top: 20px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            opacity: 0.9;
        }

        .timeline-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 25%, #f1f3f4 50%, #ffffff 75%, #f8f9fa 100%);
            padding: 100px 0;
            margin: 0 -40px;
            position: relative;
        }

        .timeline-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            background: 
                linear-gradient(45deg, transparent 0%, rgba(229, 191, 32, 0.03) 25%, transparent 50%),
                linear-gradient(-45deg, transparent 0%, rgba(34, 58, 120, 0.03) 75%, transparent 100%);
            z-index: 0;
        }

        .timeline-header {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .timeline-header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 3px;
            background: linear-gradient(45deg, #e5bf20, #c9a71c);
        }

        .timeline-container {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .timeline-container::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(to bottom, #223a78, #e5bf20);
            transform: translateX(-50%);
        }

        .timeline-item {
            background: white;
            padding: 35px;
            border-radius: 20px;
            margin-bottom: 50px;
            box-shadow: 0 12px 35px rgba(0,0,0,0.08);
            position: relative;
            width: 45%;
            border-top: 5px solid #223a78;
        }

        .timeline-item:nth-child(even) {
            margin-left: auto;
            border-top: 5px solid #e5bf20;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            width: 24px;
            height: 24px;
            background: #e5bf20;
            border-radius: 50%;
            top: 35px;
            border: 4px solid white;
            box-shadow: 0 0 0 3px #e5bf20;
        }

        .timeline-item:nth-child(even)::before {
            background: #223a78;
            box-shadow: 0 0 0 3px #223a78;
        }

        .timeline-item:nth-child(odd)::before {
            right: -62px;
        }

        .timeline-item:nth-child(even)::before {
            left: -62px;
        }

        .timeline-date {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #e5bf20;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .timeline-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1.4rem;
            color: #223a78;
            margin-bottom: 15px;
        }

        .outcome-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 75%, #f5576c 100%);
            color: white;
            padding: 80px 50px;
            border-radius: 25px;
            margin: 80px 0;
            box-shadow: 0 30px 80px rgba(102, 126, 234, 0.3);
            position: relative;
            overflow: hidden;
        }

        .outcome-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: float 20s ease-in-out infinite;
        }

        .outcome-section::after {
            content: '\2713';
            position: absolute;
            top: 30px;
            right: 30px;
            font-size: 4rem;
            color: rgba(255,255,255,0.2);
            font-weight: bold;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .outcome-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 900;
            font-size: 3.5rem;
            margin-bottom: 50px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            position: relative;
            z-index: 2;
        }

        .outcome-title::before {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: rgba(255,255,255,0.8);
            border-radius: 2px;
        }

        .outcome-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .outcome-item {
            background: rgba(255,255,255,0.25);
            padding: 35px 25px;
            border-radius: 20px;
            font-weight: 600;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 1.1rem;
            text-align: center;
            position: relative;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
            z-index: 2;
        }

        .outcome-item:hover {
            transform: translateY(-10px) scale(1.05);
            background: rgba(255,255,255,0.35);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .outcome-item::before {
            content: '\2605';
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            color: #ffd700;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .outcome-item span {
            display: block;
            margin-top: 20px;
        }
        }

        .image-section {
            margin: 60px 0;
            text-align: center;
        }

        .magazine-image {
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
            max-width: 100%;
            height: auto;
        }

        .image-caption {
            font-style: italic;
            color: #6c757d;
            margin-top: 20px;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 1rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .back-btn {
            background: linear-gradient(45deg, #223a78, #2a5298);
            color: white;
            padding: 15px 35px;
            border: none;
            border-radius: 30px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 40px;
            transition: all 0.3s;
            box-shadow: 0 6px 20px rgba(34, 58, 120, 0.2);
        }

        .back-btn:hover {
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(34, 58, 120, 0.3);
        }

        .highlight-amount {
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            color: #333;
            padding: 6px 16px;
            border-radius: 25px;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            white-space: nowrap;
        }

        .cpb-action-box {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 25%, #223a78 75%, #1a2654 100%);
            color: white;
            padding: 0;
            border-radius: 0;
            margin: 100px -40px;
            box-shadow: 0 30px 80px rgba(34, 58, 120, 0.25);
            position: relative;
            overflow: hidden;
        }

        .cpb-action-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, #e5bf20 0%, #ffd700 50%, #e5bf20 100%);
        }

        .cpb-action-box::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, #e5bf20 0%, #ffd700 50%, #e5bf20 100%);
        }

        .cpb-action-header {
            background: rgba(0,0,0,0.3);
            padding: 50px;
            text-align: center;
            position: relative;
        }

        .cpb-action-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 900;
            font-size: 3rem;
            margin-bottom: 15px;
            text-align: center;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .cpb-subtitle {
            font-family: 'Nunito Sans', sans-serif;
            font-size: 1.3rem;
            opacity: 0.9;
            font-style: italic;
            margin-top: 10px;
        }

        .action-content {
            padding: 60px 50px;
            background: white;
            color: #2c3e50;
            position: relative;
        }

        .action-timeline {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }

        .action-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(to bottom, #223a78, #e5bf20, #223a78);
            transform: translateX(-50%);
        }

        .action-step {
            position: relative;
            margin-bottom: 60px;
            width: 45%;
        }

        .action-step:nth-child(odd) {
            margin-left: 0;
            margin-right: auto;
            text-align: right;
        }

        .action-step:nth-child(even) {
            margin-left: auto;
            margin-right: 0;
            text-align: left;
        }

        .action-step::before {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            background: #e5bf20;
            border-radius: 50%;
            border: 6px solid white;
            box-shadow: 0 0 0 3px #223a78;
            top: 20px;
        }

        .action-step:nth-child(odd)::before {
            right: -75px;
        }

        .action-step:nth-child(even)::before {
            left: -75px;
        }

        .action-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 50%, #f1f3f4 100%);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            position: relative;
            border-top: 5px solid #223a78;
            transition: all 0.3s ease;
        }

        .action-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }

        .action-step:nth-child(even) .action-card {
            border-top: 5px solid #e5bf20;
        }

        .action-number {
            position: absolute;
            top: -15px;
            left: 30px;
            width: 35px;
            height: 35px;
            background: #223a78;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1rem;
        }

        .action-step:nth-child(even) .action-number {
            background: #e5bf20;
            color: #223a78;
            right: 30px;
            left: auto;
        }

        .action-label {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #223a78;
            font-size: 1.3rem;
            margin-bottom: 15px;
            margin-top: 10px;
        }

        .action-description {
            font-family: 'Nunito Sans', sans-serif;
            font-size: 1rem;
            line-height: 1.6;
            color: #495057;
        }

        .section-divider {
            text-align: center;
            margin: 80px 0;
            position: relative;
        }

        .section-divider::before,
        .section-divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 40%;
            height: 2px;
            background: linear-gradient(45deg, #e5bf20, #c9a71c);
        }

        .section-divider::before {
            left: 0;
        }

        .section-divider::after {
            right: 0;
        }

        .section-divider span {
            background: white;
            padding: 0 30px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #223a78;
            font-size: 1.1rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .magazine-column {
            column-count: 2;
            column-gap: 60px;
            column-rule: 2px solid #e9ecef;
            text-align: justify;
        }

        .magazine-column p {
            break-inside: avoid;
            margin-bottom: 25px;
        }

        .magazine-sidebar {
            background: linear-gradient(135deg, #223a78, #2a5298);
            color: white;
            padding: 40px;
            border-radius: 20px;
            margin: 40px 0;
            position: relative;
            overflow: hidden;
        }

        .magazine-sidebar::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(229, 191, 32, 0.1), transparent 70%);
        }

        .magazine-sidebar h4 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
        }

        .magazine-sidebar p {
            position: relative;
            line-height: 1.6;
        }

        .stats-highlight {
            background: linear-gradient(135deg, #fff8e1 0%, #e5bf20 50%, #fff8e1 100%);
            color: #223a78;
            padding: 50px;
            border-radius: 0;
            margin: 60px -40px;
            text-align: center;
            position: relative;
            box-shadow: inset 0 0 30px rgba(229, 191, 32, 0.1);
        }

        .stats-highlight::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: #223a78;
        }

        .stats-highlight::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: #223a78;
        }

        .stat-number {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 3rem;
            display: block;
        }

        .stat-label {
            font-family: 'Nunito Sans', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .magazine-title {
                font-size: 2.8rem;
            }
            .case-facts, .pullquote, .cpb-action-box, .outcome-section {
                padding: 30px 25px;
            }
            .magazine-hero {
                min-height: 60vh;
            }
            .timeline-container::before {
                left: 30px;
            }
            .timeline-item {
                width: calc(100% - 60px);
                margin-left: 60px;
            }
            .timeline-item:nth-child(even) {
                margin-left: 60px;
            }
            .timeline-item::before {
                left: -54px !important;
            }
            .magazine-column {
                column-count: 1;
                column-rule: none;
            }
            .section-divider::before,
            .section-divider::after {
                width: 35%;
            }
            .magazine-text:first-letter {
                font-size: 3rem;
            }
            
            /* CPB Action Timeline Mobile Styles */
            .cpb-action-box {
                margin: 50px -20px;
            }
            
            .cpb-action-title {
                font-size: 2rem;
            }
            
            .cpb-subtitle {
                font-size: 1.1rem;
            }
            
            .action-content {
                padding: 40px 20px;
            }
            
            .action-timeline::before {
                left: 30px;
            }
            
            .action-step {
                width: 100%;
                margin-left: 60px;
                text-align: left;
            }
            
            .action-step::before {
                left: -45px;
            }
            
            .action-step:nth-child(even) {
                margin-left: 60px;
                text-align: left;
            }
            
            .action-step:nth-child(even)::before {
                left: -45px;
            }
            
            .action-step:nth-child(even) .action-number {
                left: 30px;
                right: auto;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <header class="header d-md-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  py-2">
                    <div class="d-flex justify-content-between align-items-center ">
                        <div class="d-flex align-items-center contact-details">
                            <div class="d-flex align-items-center me-2">
                                <i class="bi bi-telephone-fill me-2"></i>
                                <a href="tel:+44 (0)2035854002"> +44
                                    (0)2035854002</a>
                            </div>
                            <div class="d-flex align-items-center ms-2">
                                <i class="bi bi-envelope-fill me-2"></i>
                                <a href="mailto:info@consumerprotectionbureau.co.uk">info@consumerprotectionbureau.co.uk
                                </a>
                            </div>
                        </div>

                        <div class="text-white social-icon">
                            <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1"
                                style="background-color: #3b5998;"
                                href="https://web.facebook.com/profile.php?id=61570163952467" aria-label="Facebook"
                                role="button"><i class="fab fa-facebook-f"></i></a>
                            <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1"
                                style="background-color: #0082ca;"
                                href="https://www.linkedin.com/company/consumer-protection-bureau/" aria-label="LinkedIn"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="menu-header">
        <nav class="navbar navbar-expand-xl navbar-light ">
            <div class="container menu-header-container">
                <a class="navbar-brand" href="/">
                    <img src="assets/images/Logo - Source File.png" alt="Consumer Protection Bureau Logo"
                        class="img-fluid ">
                </a>
                <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="job-opportunties/">Job Opportunties</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            Media & Insights
                            </a>
                            <ul class="dropdown-menu px-3" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item nav-link" href="blog/index.php">
                                    Blog</a></li>
                                <li><a class="dropdown-item nav-link" href="news/">
                                    Consumer Alert News</a></li>
                                    <li><a class="dropdown-item nav-link" href="case-studies.php">
                                Case Studies</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            Get Involved
                            </a>
                            <ul class="dropdown-menu px-3" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item nav-link" href="cpb-consumer-champion.php">Become a CPB
                                        Champion</a></li>
                                <li><a class="dropdown-item nav-link" href="#become-ally">Become a CPB Ally</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu px-3" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item nav-link" href="about.php">About</a></li>
                                <li><a class="dropdown-item nav-link" href="advocacy.php">Advocacy</a></li>
                                <li><a class="dropdown-item nav-link" href="contact.php">Contact</a></li>
                            </ul>
                        </li>
                        <li class=" pb-xl-0 pb-3 complaint-btn ms-2 text-center" style="">
                            <a class="text-center" href="get-help.php">Get Help
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <main>
        <!-- Hero Section -->
        <section class="magazine-hero">
            <div class="hero-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="exclusive-badge">
                                EXCLUSIVE INVESTIGATION
                            </div>
                            <h1 class="magazine-title">
                                "I Landed in London and Had Nowhere to Stay"
                            </h1>
                            <p class="magazine-subtitle">
                                How an Australian tourist was denied access to prepaid accommodation, leaving her stranded in a foreign country
                            </p>
                            <div class="d-flex align-items-center text-white-50 flex-wrap">
                                <span class="me-4">October 2025</span>
                                <span class="me-4">London, UK</span>
                                <span>Case Resolved</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Section -->
        <div class="magazine-content">
            <section class="content-section">
                <section class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 mt-3">
                        <a href="case-studies.php" class="back-btn">
                            Back to Case Studies
                        </a>

                        <!-- Case Facts Box -->
                        <div class="case-facts">
                            <div class="fact-title">
                                Case Overview
                            </div>
                            <div class="fact-grid">
                                <div class="fact-card">
                                    <div class="fact-label">Complainant</div>
                                    <div class="fact-value">Sara Tahery (Australian citizen)</div>
                                </div>
                                <div class="fact-card">
                                    <div class="fact-label">Company</div>
                                    <div class="fact-value">CG Kensington Hotel, London</div>
                                </div>
                                <div class="fact-card">
                                    <div class="fact-label">Amount</div>
                                    <div class="fact-value"><span class="highlight-amount">£328.70</span></div>
                                </div>
                                <div class="fact-card">
                                    <div class="fact-label">Duration</div>
                                    <div class="fact-value">4-night stay (19-23 October 2025)</div>
                                </div>
                                <div class="fact-card">
                                    <div class="fact-label">Issue</div>
                                    <div class="fact-value">Denial of prepaid accommodation</div>
                                </div>
                                <div class="fact-card">
                                    <div class="fact-label">Status</div>
                                    <div class="fact-value" style="color: #28a745; font-weight: bold;">Resolved - Full Refund</div>
                                </div>
                            </div>
                        </div>

                        <div class="magazine-intro">
                            Sara Tahery had planned the perfect London getaway. As an Australian citizen visiting the UK, she had carefully booked and prepaid for a four-night stay at CG Kensington Hotel, a seemingly reputable establishment in one of London's most prestigious neighborhoods. Little did she know that her dream vacation would turn into a consumer rights nightmare.
                        </div>

                        <h2 class="section-header">The Nightmare Begins</h2>

                        <div class="image-section">
                            <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                                 alt="London hotel exterior at night" class="magazine-image">
                            <p class="image-caption">London's hotel industry serves millions of international visitors annually, but not all experiences end positively</p>
                        </div>

                        <p class="magazine-text">
                            After the long international flight from Australia, Sara arrived at Heathrow Airport with her confirmed booking worth <span class="highlight-amount">£328.70</span> in hand. She had followed all the proper protocols, even notifying the hotel in advance of her late arrival after 9:00 PM due to her international flight schedule.
                        </p>

                        <div class="pullquote">
                            <div class="pullquote-text">
                                I had done everything right. I paid in full, I notified them of my late arrival, I had all my confirmation documents. How could they just leave me stranded in a foreign country?
                            </div>
                            <div class="pullquote-author">Sara Tahery, Australian Tourist</div>
                        </div>

                        <h2 class="section-header">Hidden Terms, Devastating Consequences</h2>
                        <p class="magazine-text">
                            What Sara discovered upon arrival was shocking. Despite her advance notification and full payment, the hotel refused her late check-in. The restriction had been buried in a confirmation PDF issued only after payment was completed—a practice that raised immediate red flags about transparency and fair dealing.
                        </p>

                        <div class="image-section">
                            <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                                 alt="Frustrated traveler with luggage" class="magazine-image">
                            <p class="image-caption">International travelers are particularly vulnerable when accommodation plans fall through</p>
                        </div>

                        <p class="magazine-text">
                            But the nightmare didn't end there. When Sara attempted to check in the following day, she faced yet another barrier. The hotel now demanded to see the exact same physical card used for the original payment despite her having valid identification and comprehensive proof of booking.
                        </p>

                        <div class="stats-highlight">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <span class="stat-number">£328.70</span>
                                    <div class="stat-label">Amount Paid</div>
                                </div>
                                <div class="col-md-4">
                                    <span class="stat-number">2</span>
                                    <div class="stat-label">Times Denied Access</div>
                                </div>
                                <div class="col-md-4">
                                    <span class="stat-number">100%</span>
                                    <div class="stat-label">Refund Secured</div>
                                </div>
                            </div>
                        </div>

                        <div class="two-column">
                            <p class="magazine-text">
                                As a solo female traveler in a foreign country, Sara found herself completely without accommodation support. The hotel offered no reasonable alternatives no key collection service, no delayed access arrangement, and no partial refund for the night she was denied access.
                            </p>

                            <p class="magazine-text">
                                The situation highlighted the vulnerability of international visitors when accommodation arrangements fail. With limited local knowledge and no immediate support network, Sara was forced to navigate London's expensive hotel market at short notice, effectively paying twice for accommodation.
                            </p>
                        </div>

                        <div class="section-divider">
                            <span>Crisis Timeline</span>
                        </div>

                        <!-- Timeline Section -->
                        <div class="timeline-section">
                            <div class="container">
                                <div class="timeline-container">
                                <div class="timeline-item">
                                    <div class="timeline-date">October 2025 - Pre-Arrival</div>
                                    <div class="timeline-title">Booking & Preparation</div>
                                    <p>Sara books and fully prepays £328.70 for a 4-night stay at CG Kensington Hotel. She responsibly notifies the hotel of her expected late arrival due to international flight schedule.</p>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-date">October 19, 2025 - Evening</div>
                                    <div class="timeline-title">First Refusal</div>
                                    <p>Upon arrival after 9:00 PM, hotel refuses late check-in citing policy buried in post-payment confirmation. No alternatives offered, guest forced to find emergency accommodation.</p>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-date">October 20, 2025 - Day 2</div>
                                    <div class="timeline-title">Second Rejection</div>
                                    <p>Hotel denies check-in again, this time demanding the original physical payment card despite valid ID and booking confirmation. Guest left without support.</p>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-date">October 2025 - Post-Incident</div>
                                    <div class="timeline-title">Communication Breakdown</div>
                                    <p>Hotel ceases all communication with the guest. Sara contacts Consumer Protection Bureau for assistance with what appears to be a clear breach of consumer rights.</p>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-divider">
                            <span>Legal Framework</span>
                        </div>

                        <!-- CPB Action Section -->
                        <div class="cpb-action-box">
                            <div class="cpb-action-header">
                                <h3 class="cpb-action-title">How CPB Intervened</h3>
                                <p class="cpb-subtitle">A Strategic 5-Point Action Plan</p>
                            </div>
                            
                            <div class="action-content">
                                <div class="action-timeline">
                                    <div class="action-step">
                                        <div class="action-card">
                                            <div class="action-number">1</div>
                                            <h4 class="action-label">Legal Assessment</h4>
                                            <p class="action-description">CPB identified potential breaches of the Consumer Rights Act 2015 and Consumer Protection from Unfair Trading Regulations 2008, establishing the legal foundation for intervention.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="action-step">
                                        <div class="action-card">
                                            <div class="action-number">2</div>
                                            <h4 class="action-label">Direct Intervention</h4>
                                            <p class="action-description">Immediate contact with CG Kensington Hotel demanding accommodation or resolution, emphasizing consumer rights and fair treatment principles.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="action-step">
                                        <div class="action-card">
                                            <div class="action-number">3</div>
                                            <h4 class="action-label">Policy Challenge</h4>
                                            <p class="action-description">Challenged the proportionality and fairness of rigid check-in and payment card policies that effectively denied prepaid services to consumers.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="action-step">
                                        <div class="action-card">
                                            <div class="action-number">4</div>
                                            <h4 class="action-label">Regulatory Escalation</h4>
                                            <p class="action-description">Escalated to Trading Standards and UK tourism bodies, leveraging regulatory pressure to ensure compliance with consumer protection legislation.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="action-step">
                                        <div class="action-card">
                                            <div class="action-number">5</div>
                                            <h4 class="action-label">Formal Warning</h4>
                                            <p class="action-description">Issued formal correspondence warning of further regulatory and press escalation unless immediate remedial action was taken to address consumer concerns.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="magazine-column">
                            <p class="magazine-text">
                                CPB's intervention was grounded in solid legal principles. Under the Consumer Rights Act 2015, businesses must provide services with reasonable care and skill. The hotel's rigid enforcement of policies that effectively denied a prepaid service raised serious questions about proportionality and fairness.
                            </p>

                            <p class="magazine-text">
                                Furthermore, the Consumer Protection from Unfair Trading Regulations 2008 prohibit practices that materially distort consumer behavior. Burying restrictive terms in post-payment documentation clearly fell into this category.
                            </p>
                        </div>

                        <div class="magazine-sidebar">
                            <h4>Key Legal Points</h4>
                            <p><strong>Consumer Rights Act 2015:</strong> Services must be provided with reasonable care and skill</p>
                            <p><strong>Unfair Trading Regulations 2008:</strong> Prohibits misleading practices that distort consumer behavior</p>
                            <p><strong>International Consumer Protection:</strong> UK laws apply equally to overseas visitors</p>
                        </div>

                        <!-- Outcome Section -->
                        <div class="outcome-section">
                            <div class="outcome-title">
                                Victory Achieved
                            </div>
                            <div class="outcome-grid">
                                <div class="outcome-item">
                                    <span>Hotel agreed to cancel the booking completely</span>
                                </div>
                                <div class="outcome-item">
                                    <span>Full refund of £328.70 secured and processed</span>
                                </div>
                                <div class="outcome-item">
                                    <span>Case resolved without lengthy legal proceedings</span>
                                </div>
                                <div class="outcome-item">
                                    <span>Justice achieved for overseas consumer</span>
                                </div>
                            </div>
                        </div>

                        <h2 class="section-header">Why This Case Matters</h2>
                        <p class="magazine-text">
                            Sara's experience highlights critical vulnerabilities in how overseas consumers are treated by UK hospitality businesses. International visitors, particularly solo travelers, face unique challenges when accommodation arrangements fail.
                        </p>

                        <div class="image-section">
                            <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                                 alt="International tourists with luggage" class="magazine-image">
                            <p class="image-caption">International tourism is vital to the UK economy, but consumer protection must keep pace</p>
                        </div>

                        <p class="magazine-text">
                            This case demonstrates the importance of transparency in booking terms and the need for reasonable flexibility when policies threaten to deny paid-for services. It also showcases how effective consumer advocacy can level the playing field between individual consumers and large businesses.
                        </p>

                        <div class="pullquote">
                            <div class="pullquote-text">
                                No consumer should be left stranded, especially in a foreign country, due to unreasonable policy enforcement after full payment has been made. This case reinforces the principle that businesses must act fairly and transparently.
                            </div>
                            <div class="pullquote-author">Consumer Protection Bureau</div>
                        </div>

                        <p class="magazine-text">
                            The successful resolution of Sara's case has broader implications for the travel and hospitality industry, reinforcing that consumer protection laws apply equally to overseas visitors and that businesses cannot hide behind rigid policies when basic fairness is at stake.
                        </p>

                        <!-- Final CTA -->
                        <div class="text-center py-5">
                            <div class="magazine-sidebar">
                                <h4>Need Help with a Similar Case?</h4>
                                <p>If you're experiencing problems with accommodation providers, travel companies, or any consumer issue, the Consumer Protection Bureau is here to help.</p>
                                <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                                    <a href="get-help.php" class="btn btn-light btn-lg rounded-pill px-5">Get Help Now</a>
                                    <a href="case-studies.php" class="btn btn-outline-light btn-lg rounded-pill px-5">View More Cases</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Magazine Elements -->
    

    <!-- Footer -->
    <footer class="py-4 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2026 Consumer Protection Bureau. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="contact.php" class="text-white me-3">Contact</a>
                    <a href="get-help.php" class="text-white">Get Help</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>