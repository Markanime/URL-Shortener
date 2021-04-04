<?php 
namespace routes;

class privacy {	

    private $name="";

    function __construct($name="") {
        if($name!=""){
            $this->name = str_replace("_"," ",$name);
        }
    }

    public function Print(){
        $name = $this->name;
        echo "
        <!DOCTYPE html><html> <head> <meta charset=\"utf-8\"> <meta name=\"viewport\" content=\"width=device-width\"> <title>Privacy Policy</title> <style>body{font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; padding:1em;}</style></head> <body><h2>Privacy Policy</h2> <p> Markanime Studios built the $name app as a Commercial app. This SERVICE is provided by Markanime Studios  and is intended for use as is.
          </p> <p>This page is used to inform visitors regarding my policies with the collection, use, and
            disclosure of Personal Information if anyone decided to use my Service.
          </p> <p>If you choose to use my Service, then you agree to the collection and use of information in relation
            to this policy. The Personal Information that I collect is used for providing and improving the
            Service. I will not use or share your information with anyone except as described
            in this Privacy Policy.
          </p> <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible
            at $name unless otherwise defined in this Privacy Policy.
          </p> <p><strong>Information Collection and Use</strong></p> <p>For a better experience, while using our Service, I may require you to provide us with certain
            personally identifiable information. The information that I request will be retained on your device and is not collected by me in any way.
          </p> <p>The app does use third party services that may collect information used to identify you.</p> <div><p>Link to privacy policy of third party service providers used by the app</p> <ul><li><a href=\"https://www.google.com/policies/privacy/\" target=\"_blank\">Google Play Services</a></li> <!----> <!----> <!----> <!----> <!----></ul></div> <p><strong>Log Data</strong></p> <p> I want to inform you that whenever you use my Service, in a case of an
            error in the app I collect data and information (through third party products) on your phone
            called Log Data. This Log Data may include information such as your device Internet Protocol (“IP”) address,
            device name, operating system version, the configuration of the app when utilizing my Service,
            the time and date of your use of the Service, and other statistics.
          </p> <p><strong>Cookies</strong></p> <p>Cookies are files with a small amount of data that are commonly used as anonymous unique identifiers. These
            are sent to your browser from the websites that you visit and are stored on your device's internal memory.
          </p> <p>This Service does not use these “cookies” explicitly. However, the app may use third party code and libraries
            that use “cookies” to collect information and improve their services. You have the option to either
            accept or refuse these cookies and know when a cookie is being sent to your device. If you choose to
            refuse our cookies, you may not be able to use some portions of this Service.
          </p> <p><strong>Service Providers</strong></p> <p> I may employ third-party companies and individuals due to the following reasons:</p> <ul><li>To facilitate our Service;</li> <li>To provide the Service on our behalf;</li> <li>To perform Service-related services; or</li> <li>To assist us in analyzing how our Service is used.</li></ul> <p> I want to inform users of this Service that these third parties have access to your
            Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they
            are obligated not to disclose or use the information for any other purpose.
          </p> <p><strong>Security</strong></p> <p> I value your trust in providing us your Personal Information, thus we are striving
            to use commercially acceptable means of protecting it. But remember that no method of transmission over
            the internet, or method of electronic storage is 100% secure and reliable, and I cannot guarantee
            its absolute security.
          </p> <p><strong>Links to Other Sites</strong></p> <p>This Service may contain links to other sites. If you click on a third-party link, you will be directed
            to that site. Note that these external sites are not operated by me. Therefore, I strongly
            advise you to review the Privacy Policy of these websites. I have no control over
            and assume no responsibility for the content, privacy policies, or practices of any third-party sites
            or services.
          </p> <p><strong>Children’s Privacy</strong></p> <p>These Services do not address anyone under the age of 13. I do not knowingly collect
            personally identifiable information from children under 13. In the case I discover that a child
            under 13 has provided me with personal information, I immediately delete this from
            our servers. If you are a parent or guardian and you are aware that your child has provided us with personal
            information, please contact me so that I will be able to do necessary actions.
          </p> <p><strong>Changes to This Privacy Policy</strong></p> <p> I may update our Privacy Policy from time to time. Thus, you are advised to review
            this page periodically for any changes. I will notify you of any changes by posting
            the new Privacy Policy on this page. These changes are effective immediately after they are posted on
            this page.
          </p> <p><strong>Contact Us</strong></p> <p>If you have any questions or suggestions about my Privacy Policy, do not hesitate to contact
            me.
          <h1>Monetization and Advertising Controller DPA</h1>
        <p><strong>Last Updated: January 10, 2019</strong></p><h2>Monetization and Advertising Controller Data Protection Addendum</h2><h3>GDPR Terms (Controller-Controller)</h3><p>(This Addendum applies to the services identified in the main Terms of Service found at www.unity3d.com/legal.  Parties subject to offline agreements may receive a version of these addenda for execution and incorporation to such offline agreement if such offline agreement does not include similar data protection language already.)</p><h3>1. Scope</h3><p>This Addendum is an integral part of the terms and conditions for Unity services, including but not limited to Unity’s primary Terms of Service, the Advertiser Terms of Service, and Monetization Terms of Service.  This Addendum supersedes such terms of service in case of discrepancy. The Parties agree that this Addendum is designed to state the Parties' obligations resulting from the General Data Protection Regulation, and all local implementing legislation within the European Economic Area and, as necessary, to state the obligations of the Parties with respect to legislation of countries following similar regulatory rules to protect data to the extent such laws are subject to an adequacy finding under European laws.</p><h3>2. Data Protection</h3><p><strong>Definitions:</strong>  In this Clause, the following terms shall have the following meanings:</p><ul><li>\"controller\", \"processor\", \"data subject\", \"personal data\", \"processing\" (and \"process\") and \"special categories of personal data\" shall have the meanings given in Applicable Data Protection Law;</li><li>“Customer” shall mean any party using Unity Services or software; a “Publisher” shall mean any distributor of software and services for whom Unity provides advertising services of such publisher’s software and services under a Publisher Agreement, and “Advertiser” shall mean any party placing advertisement inventory with Unity under its Advertiser Terms of Service (collectively “Customer”);</li><li>“End User” shall mean customers of Unity’s Customers and/or viewers of Publishers’ content or Advertisers’ content</li><li>\"Applicable Data Protection Law\" means any and all applicable privacy and data protection laws (including, where applicable, EU Data Protection Law) as may be amended or superseded from time to time;</li><li>\"EU Data Protection Law\" means (i) prior to 25 May 2018, the EU Data Protection Directive (Directive 95/46/EC); (ii) on and after 25 May 2018, the EU General Data Protection Regulation (Regulation 2016/679); (iii) the EU e-Privacy Directive (Directive 2002/58/EC); and (iv) any national data protection laws made under or pursuant to (i), (ii) or (iii).</li></ul><p><strong>Purpose of processing:</strong>  Unity Customers using Analytics services or installing Unity’s Ads SDK will permit the disclosure of the personal data described in the terms and conditions and documentation for such services (the \"Data\") to Unity to process as a Controller of the Data for the purposes described in Unity’s Privacy Policy as applicable by services to which the “Customer” subscribes (the \"Permitted Purpose\").  Specifically, and notwithstanding anything to the contrary in any prior Data Processing Addendum, Unity shall use the Data in identified format to make targeting decisions within its services, provide monetization services to its Customers, assist its Customers with maintaining their services, improving their services, and analysing the marketplace for their services as well as the performance of their services. Notwithstanding the foregoing, data obtained by Unity independent of any such Customer using Unity software that is the same or similar to the Data described herein shall not be restricted by this Addendum, any license agreement, or any terms or conditions for such services. Unity may use all Data collected on an aggregated or de-identified basis as set out in its Privacy Policy, provided that such use does not reveal End Users or any End User device directly or indirectly.</p><p><strong>Relationship of the parties:</strong>  The parties acknowledge that Customer is a controller of the Data it discloses to Unity, and that Unity will process the Data as a separate and independent controller for the Permitted Purpose or for a purpose described in its Privacy Policy provided that it has a legal basis for such additional processing and can comply with all aspects of applicable Data Protection Laws. </p><p><strong>Compliance with law:</strong>  Each party shall be individually and separately responsible for complying with the obligations that apply to it as a controller under Applicable Data Protection Law.  Without limitation to the foregoing, each party shall maintain a publicly-accessible privacy policy on its website that satisfies the transparency disclosure requirements of Applicable Data Protection Law. Customers shall list Unity Technologies as a third party that is collecting data within its App in its publicly available privacy policy, including providing a link to Unity Technologies’ privacy policy.  Customers agree to keep up to date versions of Unity software and services installed in their applications as Unity identifies as necessary to permit Unity to maintain its compliance with law.  By way of example and without limiting the generality of the foregoing, Unity relies on Customers updating their applications with  software changes made to provide certain opportunities for consumers to exercise their rights to disclosure and deletion requests; however, updates unrelated to compliance with law may occur from time to time which are not subject to this paragraph 2.4 nor governed by this Addendum.   To the extent required by Applicable Data Protection Law, the Parties agree that they will specifically identify to the other Party when they require that the Party obtain from the relevant individuals their explicit consent pursuant to Applicable Data Protection Law, thereby permitting the use of his or her Personal Data by the receiving Party as contemplated by that Party.  The foregoing does not create a general requirement related to Consent, and a Party requiring Consent must provide adequate notice to the other Party of this requirement.</p><p><strong>Security: </strong> Each party shall implement appropriate technical and organisational measures to protect the Data (i) from accidental or unlawful destruction, and (ii) loss, alteration, unauthorised disclosure of, or access to the Data (a \"Security Incident\").  In the event that a party suffers a confirmed Security Incident, it shall notify the other party without undue delay and both parties shall cooperate in good faith to agree and action such measures as may be necessary to mitigate or remedy the effects of the Security Incident.   Nothing herein prohibits either party with moving forward to notify regulatory authorities as may be required by law prior to notification of the other party so long as the notifying party provides notification to the other party without undue delay.</p><p><strong>Treatment of Data Rights in Prior Agreements:</strong>   Customers agree that this Addendum does not enlarge any rights provided for in their Terms of Service whether such rights are provided in online Terms of Service or in offline Agreements and they continue to be limited to the use rights and restrictions provided for therein.  For clarity to the Advertiser Terms of Service, Advertisers agree that to the extent they require Unity to present data to a third party install tracker that they have such parties under a valid data processing agreement clearly directing the install tracker as to its usage instructions, duties, and liabilities for processing such data.</p><p><strong>Survival:</strong>  This Clause shall survive termination or expiry of any terms of service or other agreement to permit Unity to comply with its legal obligations.  Upon termination or expiry of the Customer relationship, Unity may continue to process the Data for the Permitted Purpose provided that such processing complies with the requirements of this Clause and Applicable Data Protection Law.</p><p>Effect of this Addendum on other legal terms.  This Addendum in no way alters the limitations of liability or  other legal terms set out in any terms and conditions for service or any services agreement entered between the Parties.</p><h3>3. Standard Contractual Clauses</h3><p>To ensure that appropriate safeguards are afforded to personal data transferred by each party, the parties hereby incorporate the Standard Contractual Clauses for the transfer of personal data from the Community to third countries (controller to controller transfers) approved by the European Commission in decision 2004/915/EC in their entirety, subject to the following: (a) “data exporter” shall mean Customer and “data importer” shall mean Unity and (b) Annex B of the Standard Contractual Clauses shall be as set out below as Section 4 to this Data Protection Addendum</p><h3>4.  Annex B to the Standard Contractual Clauses</h3><p><strong>Data subjects</strong></p><p>The personal data transferred concern the following categories of data subjects:</p><ul><li><p>End users of mobile applications who view ads, in-app content, and play games as well as the employees of our partners and vendors who participate or service our ad network</p></li></ul><p><strong>Purpose of the transfer(s)</strong></p><p>The transfer is made for the following purposes:</p><ul><li><p>In order to enable Customer to Advertise, Monetize, or otherwise provide services as described in an agreement between Unity and Customer</p></li><li><p>To provide analytics and reporting</p></li><li><p>For Unity’s internal purposes, including billing and payment processing, fraud prevention, and improving products and services.</p></li></ul><p><strong>Categories of data</strong></p><p>The personal data transferred concern the following categories of data:</p><ul><li><p>End-user data, Advertiser ID or device IDs (e.g., IDFA, GAID, IP address)</p></li><li><p>Game play, In-app purchase, and device data, including device identifiers</p></li><li><p>Information related to the ad content or attribution data sent by Customer or Customer’s agent</p></li><li><p>Customer/Partner and Vendor Employee Personal Data: Names, email addresses, usernames, and telephone numbers of partner or vendor employees who access Unity’s ordering system to place advertisements, bid on the right to advertise to any End User, or any vendor employee who provides such information to Unity in performing services for Unity.</p></li></ul><p><strong>Recipients</strong></p><p>The personal data transferred may be disclosed only to the following recipients or categories of recipients:</p><ul><li><p>Unity Affiliates, Unity Vendors (e.g. data storage), Ad Exchanges, Demand Side Platforms, Supply Side Platforms, Direct Marketing Platforms, Publishers, Advertisers, Ad Networks</p></li></ul><p><strong>Sensitive data (if appropriate)</strong></p><p>The personal data transferred concern the following categories of sensitive data:</p><ul><li><p>None</p></li></ul><p><strong>Contact points for data protection inquiries     </strong> </p><p>Data importer: dpo@unity3d.com</p><p>Data exporter: as specified by Customer or the contact information in the agreement.</p> <p> </p><p> </p></body></html>
        ";
    }
}
?>