# vocatus
Vocatus is a digital advocate for patient data rights that makes it easier to request medical records, capture whether that request was successful, and provide a feedback loop to the people who should care at healthcare institutions, in the media, and federal agencies like the [Office of Civil Liberties] (http://www.hhs.gov/ocr/office/). 

BLUF: 

Its a challenge for individual patients and their families to serve as advocates at the healthcare system level, but their voice is crucial to driving user centered health and human services. In particular there is a groundswell of patient advocacy around access to personal health data, especially in digital formats. There are mounting stories of patients coming to harm when they cannot easily access this data, and a [proposed weakening] (https://www.federalregister.gov/articles/2015/04/15/2015-08514/medicare-and-medicaid-programs-electronic-health-record-incentive-program-modifications-to#p-219) of patient data access requirements in the Meaningful Use federal incentive program for electronic health records. Our hypothesis is that by bringing high volume, data-driven public and federal agency attention to this issue we can convince healthcare delivery system leaders and their legal teams to make this problem a priority. 

Our initial goal is to make it easy for patients to submit a standard legal request for their medical records, and then capture whether their healthcare provider appropriately complies with that request under HIPAA through a basic two-pronged follow up strategy. By collecting this information we can all learn more about the institutions where patient data access is working and where it is not, bring data driven public attention to this issue through the media, and amplify patient voices by joining them together when they report serious violations of their rights to the Office of Civil Liberties. 

MVP Goal: 

Show the prototype works for activated patients, answer some of the key questions about the prototype (described below), and develop a meaningful way of tracking the results of a request. 
MVP User: Activated patient participating in 2015 National Patient Day of Action
a person using this records request as point of advocacy
National Patient Day team wants to use MVP to learn: what we should ask for (record content), standard for the record (content standard), transport method, how best to follow up with the patient for the outcome of that request, and any collateral on the landing page that may be helpful

Post MVP-Goal:

Get C-Suite leaders and their lawyers to make fixing this problem a priority.
Convince OCR to start prioritizing these complaints. 

Theory of change for post MVP goal:

Educating the C-suit will cause behavior change, with no need to go public. (some contention about this theory, needs to be tested). 
C-Suites care about public perception, so we will use the media to bring public attention to good and bad actors in a data driven way 
The C Suite and their lawyers care about being fined by OCR, both due to the cost and public perception, so we will submit a large-volume complaint to OCR.
A publicly announced, large volume, patient complaint will encourage OCR to prioritize following up on these complaints. 

MVP Functional Description:

User Facing: 

Landing page that: 

  a. describes the project
  
  b. describes the risks
  
  c.captures contact info for follow up: Name, Email, Phone # 
  
  d. Release form/check box that they understand all the above/release us from liability/etc

Webform on landing page that is a customizable medical records request form

Healthcare organization/provider fax lookup, and a blank field in case the patient needs to self enter

Webform - Fax integration, so that the user can simply fill out the form, select a fax number, and send the form through fax

Confirmation and thanks page after fax is sent

Text and/or email based survey system that will automatically send them follow up questions about result of records request at 15 days, 30 days, 45 days, and 60 days, or until we hear that they have received their records or they ask us to stop contacting them.

Internal: - for now only Rebecca and Nate will access this, just in case somebody sends back sensitive information.

  a. Way to track any fax-confirmations received from medical records
  
  b. Way to collect and search user names, telephone, email 
  
  c. Way to easily track follow-up results from text and email surveys, and flag those that require personal follow-up 


While out of scope for the MVP, we are interested in developing a public dashboard for patient data access in the spirit of the [US City Open Data Census] (http://us-city.census.okfn.org/) which could be shared back with healthcare organizations and/or the public, and a more automated way of populating patient reports to the Office of Civil Liberties. 




