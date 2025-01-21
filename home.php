<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ծիր Կաթին - Մեր Գալակտիկան</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #home {
            flex-direction: column;
            padding: 20px;
        }

        .galactic h1 {
            font-size: 2.5rem;
            margin: 0;
            animation: FadeIn 3s ease-in-out;
        }

        .galactic h3 {
            font-size: 1.2rem;
            margin: 10px 0px;
            animation: FadeIn 3s ease-in-out;
        }

        picture {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin: 20px 0px;
        }

        .gal {
            width: 500px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            animation: scalePulse 3s infinite ease-in-out;
            margin: 10px;
        }

        .info {
            margin-top: 20px;
            font-size: 1rem;
            line-height: 1.6;
            text-align: justify;
            border: 2px solid;
            border-radius: 20px;
            padding: 20px;
        }

        p {
            padding: 20px 0px;
        }

        @keyframes FadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scalePulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
<main id="home" style="display: flex; text-align: center; justify-content: center;">
    <div class="block lb">
        <div class="galactic">
            <h1>Առեղծվածային ճամփորդություն տիեզերքում</h1>
            <h3 style="padding: 10px 0px">Մեր գալակտիկան՝ Ճանապարհորդություն դեպի Ծիր Կաթին</h3>
        </div>
        <picture>
            <img class="gal" src="https://cdn.lifehacker.ru/wp-content/uploads/2023/07/potm2306a1_1688980437.jpg" alt="Գալակտիկա 1">
            <img class="gal" src="https://hightech.fm/wp-content/uploads/2021/12/potw2149a.jpg" alt="Գալակտիկա 2">
            <img class="gal" src="https://www.zastavki.com/pictures/originals/2015/Space_Centre_round_the_galaxy_107168_.jpg" alt="Գալակտիկա 3">
        </picture>
        <div class="info">
            <p><strong>Ծիր Կաթին</strong>՝ մեր տան տիեզերական տունը,</p>
            <p>հսկայական սպիրալաձև գալակտիկա է, որը գտնվում է Տիեզերական Մեծ Պայթյունից հետո ձևավորված գալակտիկաների մեջ:</p>
            <p>Այն ունի շուրջ 200-400 միլիարդ աստղ, Ծիր Կաթնի կառուցվածքը բաղկացած է չորս հիմնական սպիրալաձև թևերից՝ Պերսևսի թևը, </p>
            <p>Վահանի-Կենտավրոսի թևը, Արծիվի թևը և Օրիոնի թևը, որտեղ գտնվում է մեր Արեգակնային համակարգը:</p>
            <p>Գալակտիկայի կենտրոնում տեղակայված է գերմասիվ սև խոռոչ՝ <strong>Աղեղնավոր A*</strong>, որի զանգվածը մոտ 4 միլիոն անգամ մեծ է Արեգակից:</p>
            <p>Աստղագիտական դիտարկումները ցույց են տալիս, որ Ծիր Կաթնի հարևանությամբ կան բազմաթիվ փոքր արբանյակային գալակտիկաներ,</p>
            <p>ինչպես Մագելանի ամպերը և Անդրոմեդայի գալակտիկան, որը հետագայում կարող է բախվել Ծիր Կաթնի հետ՝ ստեղծելով նոր միացյալ գալակտիկա:</p>
            <p>Ծիր Կաթինը ընդգրկում է տիեզերական այլ օբյեկտներ, ինչպիսիք են միգամածություններ, նոր աստղեր և մոլորակներ:</p>
        </div>
    </div>
</main>
</body>
</html>
