<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KlyntaHub - Professional Photo Booth Rentals | Capture Every Moment</title>
    <meta name="description" content="KlyntaHub offers professional photo booth rental services for weddings, corporate events, birthdays, and special occasions. Modern equipment, instant prints, and memorable experiences. Click here to continue exploring our amazing photo booth options and make your event unforgettable.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .klynta-main-wrapper-847x {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .klynta-header-section-92k {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .klynta-nav-container-45m {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .klynta-logo-text-78n {
            font-size: 2rem;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }

        .klynta-nav-menu-33q {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .klynta-nav-link-66r {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .klynta-nav-link-66r:hover {
            color: #ffd700;
        }

        .klynta-hero-section-89t {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .klynta-hero-content-12w {
            max-width: 800px;
            padding: 2rem;
        }

        .klynta-hero-title-55e {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .klynta-hero-subtitle-77y {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .klynta-cta-button-99u {
            background: #ff6b6b;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .klynta-cta-button-99u:hover {
            background: #ff5252;
            transform: translateY(-2px);
        }

        .klynta-services-section-44i {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .klynta-container-88o {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .klynta-section-title-22p {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .klynta-services-grid-11a {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .klynta-service-card-66s {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .klynta-service-card-66s:hover {
            transform: translateY(-5px);
        }

        .klynta-service-image-33d {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .klynta-about-section-77f {
            padding: 80px 0;
            background: white;
        }

        .klynta-about-grid-55g {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .klynta-about-image-44h {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .klynta-history-section-88j {
            padding: 80px 0;
            background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .klynta-timeline-container-99k {
            max-width: 800px;
            margin: 0 auto;
        }

        .klynta-timeline-item-22l {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .klynta-reviews-section-66m {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .klynta-reviews-grid-33n {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .klynta-review-card-77o {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .klynta-stars-44p {
            color: #ffd700;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .klynta-equipment-section-55q {
            padding: 80px 0;
            background: white;
        }

        .klynta-equipment-grid-88r {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .klynta-equipment-item-22s {
            text-align: center;
            padding: 2rem;
            border: 2px solid #eee;
            border-radius: 10px;
            transition: border-color 0.3s;
        }

        .klynta-equipment-item-22s:hover {
            border-color: #667eea;
        }

        .klynta-process-section-99t {
            padding: 80px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .klynta-process-steps-44u {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .klynta-process-step-77v {
            text-align: center;
            padding: 2rem;
        }

        .klynta-step-number-33w {
            background: #ff6b6b;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        .klynta-footer-section-88x {
            background: #333;
            color: white;
            padding: 40px 0 20px;
        }

        .klynta-footer-grid-55y {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .klynta-footer-bottom-22z {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #555;
        }

        .klynta-modal-overlay-99aa {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .klynta-modal-content-44bb {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .klynta-close-modal-77cc {
            float: right;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .klynta-close-modal-77cc:hover {
            color: #333;
        }

        .klynta-phone-link-33dd {
            color: inherit;
            text-decoration: none;
        }

        .klynta-phone-link-33dd:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .klynta-nav-menu-33q {
                display: none;
            }
            
            .klynta-hero-title-55e {
                font-size: 2.5rem;
            }
            
            .klynta-about-grid-55g {
                grid-template-columns: 1fr;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%31%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%31%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%31%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%0A'));
</script>

<body>
    
    <div class="klynta-main-wrapper-847x">
        <header class="klynta-header-section-92k">
            <nav class="klynta-nav-container-45m">
                <a href="#home" class="klynta-logo-text-78n">KlyntaHub</a>
                <ul class="klynta-nav-menu-33q">
                    <li><a href="#services" class="klynta-nav-link-66r">Services</a></li>
                    <li><a href="#about" class="klynta-nav-link-66r">About</a></li>
                    <li><a href="#history" class="klynta-nav-link-66r">History</a></li>
                    <li><a href="#equipment" class="klynta-nav-link-66r">Equipment</a></li>
                    <li><a href="#process" class="klynta-nav-link-66r">Process</a></li>
                    <li><a href="#reviews" class="klynta-nav-link-66r">Reviews</a></li>
                    <li><a href="#contact" class="klynta-nav-link-66r">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section id="home" class="klynta-hero-section-89t">
            <div class="klynta-hero-content-12w">
                <h1 class="klynta-hero-title-55e">Capture Every Smile</h1>
                <p class="klynta-hero-subtitle-77y">Professional Photo Booth Rentals for Unforgettable Events</p>
                <a href="#services" class="klynta-cta-button-99u">Click Here to Continue</a>
            </div>
        </section>

        <section id="services" class="klynta-services-section-44i">
            <div class="klynta-container-88o">
                <h2 class="klynta-section-title-22p">Our Photo Booth Services</h2>
                <div class="klynta-services-grid-11a">
                    <div class="klynta-service-card-66s">
                        <img src="https://images.pexels.com/photos/2788792/pexels-photo-2788792.jpeg" alt="Wedding Photo Booth" class="klynta-service-image-33d">
                        <h3>Wedding Celebrations</h3>
                        <p>Transform your special day with our enchanting photo booth experiences. Guests will create lasting memories while you celebrate your union. Our professional equipment captures every joyful moment with crystal-clear quality and instant printing capabilities.</p>
                    </div>
                    <div class="klynta-service-card-66s">
                        <img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg" alt="Corporate Events" class="klynta-service-image-33d">
                        <h3>Corporate Events</h3>
                        <p>Elevate your business gatherings with interactive photo experiences that encourage networking and team building. Our sleek setups complement any professional environment while providing entertainment that breaks the ice and creates connections.</p>
                    </div>
                    <div class="klynta-service-card-66s">
                        <img src="https://images.pexels.com/photos/1729931/pexels-photo-1729931.jpeg" alt="Birthday Parties" class="klynta-service-image-33d">
                        <h3>Birthday Celebrations</h3>
                        <p>Make birthdays extraordinary with our fun-filled photo booth adventures. From children's parties to milestone celebrations, we bring excitement and laughter that guests of all ages will treasure forever.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="klynta-about-section-77f">
            <div class="klynta-container-88o">
                <div class="klynta-about-grid-55g">
                    <div>
                        <h2 class="klynta-section-title-22p" style="text-align: left;">About KlyntaHub</h2>
                        <p style="margin-bottom: 1.5rem;">KlyntaHub emerged from a passionate vision to revolutionize event photography through innovative booth experiences. Our journey began when founder Marcus Kellingham recognized the gap between traditional photography and interactive guest engagement.</p>
                        <p style="margin-bottom: 1.5rem;">We specialize in creating memorable moments through cutting-edge technology and creative setups. Our team understands that every event tells a unique story, and we're here to help capture those precious chapters through spontaneous, joyful photography sessions.</p>
                        <p style="margin-bottom: 1.5rem;">What sets us apart is our commitment to seamless integration with your event's atmosphere. We don't just provide equipment; we deliver complete experiences that enhance your celebration while creating tangible memories for every guest.</p>
                        <a href="#equipment" class="klynta-cta-button-99u">Click Here to Continue</a>
                    </div>
                    <img src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg" alt="About KlyntaHub" class="klynta-about-image-44h">
                </div>
            </div>
        </section>

        <section id="history" class="klynta-history-section-88j">
            <div class="klynta-container-88o">
                <h2 class="klynta-section-title-22p">Our Journey Through Time</h2>
                <div class="klynta-timeline-container-99k">
                    <div class="klynta-timeline-item-22l">
                        <h3>2018 - The Beginning</h3>
                        <p>Marcus Kellingham started KlyntaHub in his garage with a single photo booth unit and a dream to revolutionize event entertainment. The first booking was his neighbor's anniversary party, where guests spent hours creating hilarious memories.</p>
                    </div>
                    <div class="klynta-timeline-item-22l">
                        <h3>2019 - Expansion Phase</h3>
                        <p>After serving over 150 events in our first year, we expanded our fleet to include five different booth styles. We also introduced our signature prop collection, featuring over 200 unique items sourced from local artisans and international suppliers.</p>
                    </div>
                    <div class="klynta-timeline-item-22l">
                        <h3>2020 - Innovation During Challenges</h3>
                        <p>When the world changed, we adapted by developing contactless photo experiences and virtual booth options. This innovation helped us serve clients safely while maintaining the fun and engagement that makes events special.</p>
                    </div>
                    <div class="klynta-timeline-item-22l">
                        <h3>2021-2024 - Growth and Recognition</h3>
                        <p>Today, KlyntaHub serves hundreds of events annually across the region. We've been featured in Event Planning Magazine and received the Regional Business Excellence Award for outstanding customer service and innovation in entertainment technology.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="equipment" class="klynta-equipment-section-55q">
            <div class="klynta-container-88o">
                <h2 class="klynta-section-title-22p">Professional Equipment & Features</h2>
                <div class="klynta-equipment-grid-88r">
                    <div class="klynta-equipment-item-22s">
                        <h3>High-Resolution Cameras</h3>
                        <p>Professional DSLR cameras with advanced lighting systems ensure every photo captures stunning detail and vibrant colors, regardless of venue lighting conditions.</p>
                    </div>
                    <div class="klynta-equipment-item-22s">
                        <h3>Instant Print Technology</h3>
                        <p>State-of-the-art thermal printers deliver high-quality photos in seconds, allowing guests to take home physical memories immediately after their session.</p>
                    </div>
                    <div class="klynta-equipment-item-22s">
                        <h3>Interactive Touchscreens</h3>
                        <p>User-friendly interfaces make operation simple for guests of all ages, with customizable options for filters, frames, and digital enhancements.</p>
                    </div>
                    <div class="klynta-equipment-item-22s">
                        <h3>Custom Backdrop Systems</h3>
                        <p>Versatile backdrop options range from elegant fabric drapes to themed scenes, all designed to complement your event's aesthetic and atmosphere.</p>
                    </div>
                    <div class="klynta-equipment-item-22s">
                        <h3>Professional Lighting</h3>
                        <p>Studio-quality LED lighting systems eliminate shadows and ensure flattering illumination for every guest, creating professional-looking photos every time.</p>
                    </div>
                    <div class="klynta-equipment-item-22s">
                        <h3>Digital Gallery Access</h3>
                        <p>All photos are automatically uploaded to a secure online gallery, allowing guests to download and share their favorite moments on social media platforms.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="process" class="klynta-process-section-99t">
            <div class="klynta-container-88o">
                <h2 class="klynta-section-title-22p">How We Make Magic Happen</h2>
                <div class="klynta-process-steps-44u">
                    <div class="klynta-process-step-77v">
                        <div class="klynta-step-number-33w">1</div>
                        <h3>Consultation & Planning</h3>
                        <p>We discuss your event details, venue requirements, and creative vision to design the perfect photo booth experience tailored to your celebration.</p>
                    </div>
                    <div class="klynta-process-step-77v">
                        <div class="klynta-step-number-33w">2</div>
                        <h3>Setup & Testing</h3>
                        <p>Our professional team arrives early to install equipment, test all systems, and ensure everything operates flawlessly before your guests arrive.</p>
                    </div>
                    <div class="klynta-process-step-77v">
                        <div class="klynta-step-number-33w">3</div>
                        <h3>Event Management</h3>
                        <p>A dedicated attendant remains on-site throughout your event, assisting guests, maintaining equipment, and ensuring smooth operation from start to finish.</p>
                    </div>
                    <div class="klynta-process-step-77v">
                        <div class="klynta-step-number-33w">4</div>
                        <h3>Memory Delivery</h3>
                        <p>Within 48 hours, you'll receive access to all digital photos plus a curated highlight reel showcasing the best moments from your event.</p>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 3rem;">
                    <a href="#reviews" class="klynta-cta-button-99u">Click Here to Continue</a>
                </div>
            </div>
        </section>

        <section id="reviews" class="klynta-reviews-section-66m">
            <div class="klynta-container-88o">
                <h2 class="klynta-section-title-22p">What Our Clients Say</h2>
                <div class="klynta-reviews-grid-33n">
                    <div class="klynta-review-card-77o">
                        <div class="klynta-stars-44p">★★★★★</div>
                        <p>"KlyntaHub transformed our wedding reception into an absolute blast! Guests couldn't stop taking photos, and the quality was incredible. Marcus and his team were professional, friendly, and made sure everyone had a fantastic time. The online gallery was ready the next day!"</p>
                        <strong>- Sarah & Michael Thompson</strong>
                    </div>
                    <div class="klynta-review-card-77o">
                        <div class="klynta-stars-44p">★★★★★</div>
                        <p>"Our corporate holiday party was elevated to new heights thanks to KlyntaHub's amazing photo booth setup. Employees from different departments were mingling and laughing together, creating connections that lasted well beyond the event. Highly recommended for business functions!"</p>
                        <strong>- Jennifer Martinez, HR Director</strong>
                    </div>
                    <div class="klynta-review-card-77o">
                        <div class="klynta-stars-44p">★★★★★</div>
                        <p>"My daughter's sweet sixteen was absolutely perfect, and the photo booth was definitely the highlight! The props were creative and fun, the attendant was patient with all the teenagers, and the instant prints were such a hit. Everyone went home with amazing memories!"</p>
                        <strong>- Robert Chen</strong>
                    </div>
                    <div class="klynta-review-card-77o">
                        <div class="klynta-stars-44p">★★★★★</div>
                        <p>"From setup to breakdown, KlyntaHub exceeded every expectation. The equipment was top-notch, the service was impeccable, and the photos captured the joy of our anniversary celebration perfectly. We're already planning to book them for our next family gathering!"</p>
                        <strong>- Linda & David Rodriguez</strong>
                    </div>
                    <div class="klynta-review-card-77o">
                        <div class="klynta-stars-44p">★★★★★</div>
                        <p>"As an event planner, I've worked with many photo booth companies, but KlyntaHub stands out for their reliability and creativity. They consistently deliver exceptional experiences that make my clients happy and my job easier. True professionals in every sense!"</p>
                        <strong>- Amanda Foster, Event Coordinator</strong>
                    </div>
                    <div class="klynta-review-card-77o">
                        <div class="klynta-stars-44p">★★★★★</div>
                        <p>"The photo booth at our company picnic was such a success that employees are still talking about it months later! KlyntaHub created a fun, relaxed atmosphere that brought out everyone's personality. The digital gallery feature was incredibly convenient for sharing photos."</p>
                        <strong>- Kevin Park, Office Manager</strong>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 3rem;">
                    <a href="#contact" class="klynta-cta-button-99u">Click Here to Continue</a>
                </div>
            </div>
        </section>

        <footer id="contact" class="klynta-footer-section-88x">
            <div class="klynta-container-88o">
                <div class="klynta-footer-grid-55y">
                    <div>
                        <h3>Contact Information</h3>
                        <p>Ready to make your event unforgettable? Get in touch with our friendly team today!</p>
                        <p><strong>Phone:</strong> <a href="tel:+15559876543" class="klynta-phone-link-33dd">+1 (555) 987-6543</a></p>
                        <p><strong>Email:</strong> hello@klyntahub.com</p>
                        <p><strong>Address:</strong> 2847 Celebration Avenue, Eventville, EV 12345</p>
                    </div>
                    <div>
                        <h3>Service Areas</h3>
                        <p>We proudly serve the greater metropolitan area and surrounding regions:</p>
                        <ul style="list-style: none; padding-left: 0;">
                            <li>• Downtown District</li>
                            <li>• Suburban Communities</li>
                            <li>• Wedding Venues</li>
                            <li>• Corporate Centers</li>
                            <li>• Event Halls & Hotels</li>
                        </ul>
                    </div>
                    <div>
                        <h3>Business Hours</h3>
                        <p><strong>Monday - Friday:</strong> 9:00 AM - 7:00 PM</p>
                        <p><strong>Saturday:</strong> 10:00 AM - 6:00 PM</p>
                        <p><strong>Sunday:</strong> 12:00 PM - 5:00 PM</p>
                        <p><strong>Emergency Support:</strong> Available 24/7 during events</p>
                    </div>
                    <div>
                        <h3>Quick Links</h3>
                        <p><a href="#" onclick="showModal('privacy')" style="color: #ccc; text-decoration: none;">Privacy Policy</a></p>
                        <p><a href="#" onclick="showModal('terms')" style="color: #ccc; text-decoration: none;">Terms of Service</a></p>
                        <p><a href="#services" style="color: #ccc; text-decoration: none;">Our Services</a></p>
                        <p><a href="#equipment" style="color: #ccc; text-decoration: none;">Equipment Details</a></p>
                    </div>
                </div>
                <div class="klynta-footer-bottom-22z">
                    <p>&copy; 2024 KlyntaHub Photo Booth Rentals. All rights reserved. Creating memories one click at a time.</p>
                </div>
            </div>
        </footer>

        <!-- Privacy Policy Modal -->
        <div id="privacyModal" class="klynta-modal-overlay-99aa">
            <div class="klynta-modal-content-44bb">
                <span class="klynta-close-modal-77cc" onclick="closeModal('privacy')">&times;</span>
                <h2>Privacy Policy</h2>
                <p><strong>Effective Date:</strong> January 1, 2024</p>
                
                <h3>Information We Collect</h3>
                <p>KlyntaHub collects information you provide directly, such as contact details for event bookings, venue information, and event preferences. We also collect photos taken during your event for gallery creation and service delivery purposes.</p>
                
                <h3>How We Use Information</h3>
                <p>We use collected information to provide photo booth services, create digital galleries, communicate about your event, and improve our service quality. Photos are used solely for your event and are not shared without explicit permission.</p>
                
                <h3>Information Sharing</h3>
                <p>We do not sell, trade, or share your personal information with third parties except as necessary to provide our services or as required by law. Event photos remain private and are only accessible to you and your designated guests.</p>
                
                <h3>Data Security</h3>
                <p>We implement appropriate security measures to protect your information against unauthorized access, alteration, disclosure, or destruction. Digital galleries are password-protected and encrypted for your privacy.</p>
                
                <h3>Contact Us</h3>
                <p>For questions about this privacy policy, contact us at hello@klyntahub.com or call <a href="tel:+15559876543" class="klynta-phone-link-33dd">+1 (555) 987-6543</a>.</p>
            </div>
        </div>

        <!-- Terms of Service Modal -->
        <div id="termsModal" class="klynta-modal-overlay-99aa">
            <div class="klynta-modal-content-44bb">
                <span class="klynta-close-modal-77cc" onclick="closeModal('terms')">&times;</span>
                <h2>Terms of Service</h2>
                <p><strong>Effective Date:</strong> January 1, 2024</p>
                
                <h3>Service Agreement</h3>
                <p>By booking KlyntaHub services, you agree to these terms. We provide photo booth rental services including equipment, setup, operation, and digital gallery creation for your specified event date and duration.</p>
                
                <h3>Booking and Payment</h3>
                <p>Bookings require a signed contract and deposit. Final payment is due before event commencement. Cancellations made less than 14 days before the event may incur fees as outlined in your service agreement.</p>
                
                <h3>Equipment and Venue</h3>
                <p>Client must provide adequate space, power supply, and safe environment for equipment operation. KlyntaHub is not responsible for venue-related issues that prevent service delivery. Equipment remains property of KlyntaHub at all times.</p>
                
                <h3>Photo Usage Rights</h3>
                <p>Clients retain rights to all photos taken during their event. KlyntaHub may use select photos for marketing purposes with client permission. We respect privacy and will not use photos without explicit consent.</p>
                
                <h3>Liability Limitations</h3>
                <p>KlyntaHub's liability is limited to the service fee paid. We are not responsible for indirect damages, lost profits, or consequential damages arising from service provision or equipment malfunction.</p>
                
                <h3>Contact Information</h3>
                <p>Questions about these terms should be directed to hello@klyntahub.com or <a href="tel:+15559876543" class="klynta-phone-link-33dd">+1 (555) 987-6543</a>.</p>
            </div>
        </div>
    </div>

    <script>
        function showModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'block';
            } else if (type === 'terms') {
                document.getElementById('termsModal').style.display = 'block';
            }
        }

        function closeModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'none';
            } else if (type === 'terms') {
                document.getElementById('termsModal').style.display = 'none';
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacyModal');
            const termsModal = document.getElementById('termsModal');
            if (event.target === privacyModal) {
                privacyModal.style.display = 'none';
            }
            if (event.target === termsModal) {
                termsModal.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>








