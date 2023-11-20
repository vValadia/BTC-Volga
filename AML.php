<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTS-Volga</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="static/style/style-rules.css">
</head>

<body>
    <DIV class="header">
        <div class="logo"> <a href="index.php"><img src="static/image/Logo.svg" alt="logo"></a></div>
        <div class="menu1">
            <nav>
                <ul>
                    <a class="link" href="rules.php">
                        <li>Правила</li>
                    </a>
                    <a class="link"  href="AML.php">
                        <li>Политика</li>
                    </a>
                    <a class="link"  href="help.php">
                        <li>Поддержка</li>
                    </a>
                </ul>
            </nav>
        </div>
        <?php
             if(isset($_COOKIE['user']) == false):
        ?>
        <div class="menu2">
            <nav>
                <ul>
                    <a class="link"  href="log.php">
                        <li>Войти</li>
                    </a>
                    <a class="link"  href="reg.php">
                        <li>Регистрация</li>
                    </a>
                </ul>
            </nav>      

        </div>
        <?php else:?>
        <p style="Color:white; grid-column: 8/9; text-align:right;"><?=$_COOKIE['user']?></p><a href="/exit.php"><button style="border:none; color:white; background-color:#0B8AFF;width:180%; height:100%; font-size:25px;">Выход</button></a>
        <?php endif;?>
        <div class="menu3">
            <button class="burger">&#9776</button>
            <div class="menu1">
                <a href="rules.php">Правила</a>
                <a href="AML.php">Политика</a>
                <a href="help.php">Поддержка</a>
                <a href="log.php">Войти</a>
                <a href="reg.php">Регистрация</a>
            </div>
        </div>
    </DIV>
        <div class="main">
            <img src="static/image/background.jpg" alt="">
            
            <div class="aml">
                <span>
<h1>Политика AML/CFT</h1>

The Anti-Money Laundering, Countering Financing of Terrorism and Know Your Customer Policy (hereinafter - the "AML/CFT Policy") of btc-volga.com is designated to prevent and mitigate possible risks of btc-volga.com being involved in any kind of illegal activity.

<h4>Money laundering is defined as</h4>
<ol>
<li>
        the conversion or transfer of property derived from criminal activity or property obtained instead of such property, knowing that such property is derived from criminal activity or from an act of participation in such activity, for the purpose of concealing or disguising the illicit origin of the property or of assisting any person who is involved in the commission of such an activity to evade the legal consequences of that person’s actions;
</li>
<li>
        the acquisition, possession or use of property derived from criminal activity or property obtained instead of such property, knowing, at the time of receipt, that such property was derived from criminal activity or from an act of participation therein;
</li>
<li>
        the concealment or disguise of the true nature, source, location, disposition, movement, rights with respect to, or ownership of, property derived from criminal activity or property obtained instead of such property, knowing that such property is derived from criminal activity or from an act of participation in such an activity.
</li>
</ol>    
    Money laundering also means participation in, association to commit, attempts to commit and aiding, abetting, facilitating and counselling the commission of any of the activities referred to above.
    
    Terrorist financing is defined as the financing and supporting of an act of terrorism and commissioning thereof as well as the financing and supporting of travel for the purpose of terrorism.
    
    Both international and local laws and regulations require btc-volga.com to implement effective internal procedures and mechanisms to prevent money laundering, terrorist financing, drug and human trafficking, proliferation of weapons of mass destruction, corruption and bribery and to take action in case of any form of suspicious activity from its Users.


<h4>AML/CFT Policy covers the following matters</h4>

<ul>
    <li>internal controls</li>
    <li>compliance officer;</li>
    <li>training of personal;</li>
    <li>verification procedures;</li>
    <li>monitoring, risk assessment and risk-based approach;</li>
    <li>AML/CFT program audit.</li>
</ul>

<h4>Internal Controls</h4>

We have designed a structured systеm of internal controls in order to comply with applicable Anti-Money Laundering, Countering Financing of Terrorism (hereinafter - the "AML/CFT") laws and regulations, including, but not limited to:
<ul> 
    <li>establishing customer's identity and verifying the information provided;</li>
    <li>establishing special regime for dealing with customers which are politically exposed persons (PEP);</li>
    <li>the identification of unusual activity and facilitating the reporting of suspicious activity (SAR);</li>
    <li>record keeping of customer documentation and transactional history.</li>
</ul>
<br>
Compliance Officer
<br>
The Compliance Officer is the person, duly authorized by btc-volga.com, whose duty is to develop and enforce the effective implementation of the AML/CFT. The Compliance Officer is required to report any violations of the AML/CFT procedures and is responsible for collecting and filing SARs.
<br>
It is the Compliance Officer’s responsibility to supervise all aspects of btc-volga.com’s anti-money laundering and counter-terrorist financing measures, including but not limited to:
<br><br>
<ul>
    <li>establishing and updating internal policies and procedures for the completion, review, submission and retention of all reports and records required under the applicable laws and regulations;</li>
    <li>collecting Users' identification information and verifying the information provided; implementing a records management systеm for appropriate storage and retrieval of documents, files, forms and logs;</li>
    <li>collection and analysis of information referring to unusual transactions or transactions or circumstances suspected of money laundering or terrorist financing, which have become evident; investigating any unusual, suspicious activity;</li>
    <li>reporting to the appropriate authorities in the event of suspicion of money laundering or terrorist financing; providing law enforcement with information as required under the applicable laws and regulations;</li>
    <li>periodic submission of written statements on compliance with the requirements arising from law to the management board;</li>
    <li>organization of the training of employees;</li>
    <li>performance of other duties and obligations related to compliance with the requirements of law; updating risk assessment regularly.</li>
</ul>
<br>
The Compliance Officer is entitled to interact with law enforcement, which are involved in prevention of money laundering, terrorist financing and other illegal activity.

<h4>Training</h4>

All employees receive a full AML/CFT training, along with a job‐specific guidance. Training is conducted at least once every twelve (12) months to ensure that trainees are informed and act in compliance with all applicable laws and regulations. Employees pass additional training if necessary (if new law or regulation is adopted, if required by law, etc.) New employees pass relevant training before commencing to work. Training program is updated regularly to reflect current laws and regulations.

<h4>Verification Procedures</h4>

btc-volga.com establishes its own customer verification procedures within the standards of AML/CFT frameworks.<br>
btc-volga.com carries out due diligence and KYC checks before entering business relations with customer, client, contractor.<br>
In the process of due diligence and KYC and in order to open an account, person’s identity, information about a person provided and documents submitted have to be verified and checked against sanctions and watch lists, including PEP list. btc-volga.com uses special tools, structured systеm of verification and check for that.<br>
Regarding legal entities (their owners/shareholders/beneficiaries, etc.), btc-volga.com carries out special enhanced due diligence, KYC, compliance procedures.<br>
btc-volga.com ensures specific enhanced identification, KYC, due diligence, compliance procedure for customers referenced as PEP, whatever their place of residence.<br>

<h4>Monitoring, risk assessment and risk-based approach</h4>

btc-volga.com carries out customer’s transactions monitoring, risk‐assessment and suspicious activity detection. For that purpose it uses specially developed systеm, including using a high-performance tools.<br>
btc-volga.com uses risk-based approach to combating/preventing money laundry and/or financing terrorism.<br>
To assist in determining the level of AML/CFT due diligence to be exercised with regard to the customer, a compliance risk profile is calculated first of all on entry into relations (Low, Medium, High), and is then recalculated routinely.<br>
AML/CFT compliance ensures that an ongoing transaction monitoring is conducted to detect transactions which are unusual or suspicious compared to the customer profile.<br>
Determination of the unusual nature of one or more transactions essentially depends on a subjective assessment, in relation to the knowledge of the customer (KYC), their financial behaviour and the transaction counterparty.<br>
If a transaction is inconsistent with a customer’s known personal usual activities or personal habits, this transaction may be considered suspicious. Data and transaction monitoring tools are used to identify unusual/uncommon patterns of customer’s activity. After review and investigation, it is Compliance Officer’s decision whether to file a SAR or not.<br>
Once a SAR is filed with a relevant agency, a copy of filing documentation is maintained. SAR filing is confidential and only the btc-volga.com’s employees involved in the investigation and reporting process will be aware of its existence.<br>
All records are retained for no less than (5) years and are available upon official request by an authorized examiner, regulator, or law enforcement agency.<br>
Any btc-volga.com staff member must inform the Compliance Officer of any atypical transactions which they observe and cannot attribute to a lawful activity or source of income known of the customer.

<h4>AML audit</h4>

The Compliance Officer is responsible for conducting AML/CFT audit at least annually. Other audit demands are set in internal policies and procedures.
<br><br>
We apply due diligence measures, in particular
<br>
<ul>
    <li>upon establishment of a business relationship;</li>
    <li>upon verification of information gathered while applying due diligence measures or in the case of doubts as to the sufficiency or truthfulness of the documents or data gathered earlier while updating the relevant data;</li>
    <li>upon suspicion of money laundering or terrorist financing;</li>
    <li>in some other cases, including in other exact cases prescribed by law and in cases of identifying “red flags” in accordance to internal procedures.</li>
</ul>

<h4>Preservation of data</h4>

We retain the originals or copies of the documents, which serve as the basis for identification and verification of persons, and the documents serving as the basis for the establishment of a business relationship no less than five years after termination of the business relationship.
We retain the documents prepared with regard to a transaction on any data medium and the documents and data serving as the basis for the notification obligations for no less than five years after making the transaction or performing the duty to report.

<h4>Our monitoring of a business relationship includes, in particular</h4>

<ul>
    <li>checking of transactions made in a business relationship in order ensure that the transactions are in concert with our knowledge of the customer, its activities and risk profile;</li>
    <li>regular updating of relevant documents, data or information gathered in the course of application of due diligence measures;</li>
    <li>identifying the source and origin of the funds used in a transaction;</li>
    <li>paying more attention to transactions that a likely to be linked with money laundering or terrorist financing, including to complex, high-value and unusual transactions and transaction patterns that do not have a reasonable or visible economic or lawful purpose or that are not characteristic of the given business specifics;</li>
    <li>paying more attention to the business relationship or transaction whereby the customer (or payment provider, etc. of the customer) is from a high-risk third country or a country or territory specified by law as country or jurisdiction with factor(s) increasing the geographical risk.</li>
</ul>
</div>
<div class="footer">
        <div>
        <span>© Btc-Volga | Политика AML | Правила | Поддержка</span>
        <img src="static/image/Logo BestChange.png" alt=""></div>
    </div>
    <div class="end"><img src="static/image/light.png" alt=""></div>
</div>
</body>

</html>