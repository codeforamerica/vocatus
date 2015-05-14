# vocatus
An automated advocate for patient rights

BLUF: Its a challenge for individual patients and their families to serve as advocates at the healthcare system level, but their engagement and participation are crucial to creating more user centered health and human services. In particular there is a groundswell of patient activity, and regulatory urgency, around personal health data access and data types that are currently unavailable or unreliable when needed to make important decisions (such as physician network, cost, and medication formulary data). 

Vocatus is an automation of several of the most important ways that patients can affirm their health data rights and improve data they need for key decisions through reporting their experiences. 

A few common examples include:

* Reporting to [HHS OCR](http://www.hhs.gov/ocr/office/) when a request for health data access has been refused or incorrectly responded to.
* Reporting to OCR and/or a health system leader when a provider refuses to accept email or provide access to data digitally because HIPAA "does not allow it" (because HIPAA does allow it, and its a patient's right). 
* Reporting to a health system leader when a provider refuses to transmit data in the reasonable method requested by a patient or their representative, or accept the transmission of data, as part of Meaningful Use "View, Download and Transmit"
* Reporting to insurance companies when healthcare provider network information is incorrect. 
* Reporting reactions to medications to the FDA.
* etc.

Each of these reporting options represents a similar workflow, but with different actors to report to, and information to report. Due to plans for a Patient DAta Day of Action this July 4th, 2015, we propose this tool be prototyped for the first and second use cases described above. 

## Shared functions
Use the most recent NPPES data for contact information for providers and to create a "which provider" chooser.... allowing patients to quickly choose which healthcare provider or organization that they are having the issue with...


## Health insurance coverage reporting
Hopefully which providers are covered under which insurance plans should be open data soon.

When this becomes true there will need to be a way for patients to tell insurance companies that their provider-to-plan data is incorrect. This reporting should then "watch" subsequent releases of the data, and ensure that the provider is properly removed. 
If the provider is not removed after a reasonable amount of time after the provider was reported as "not in network" the application should contact the provider (automatically send a fax probably), to verify whether they are actually in or out of network. (it is possible that the patients might have got it wrong for some reason). 

This functionality should be combined with a way-back-machine type functionality that will show when doctors are added or removed from the insurance plan networks.... 

## Refusal to provide access to patient records. 

* First, the patient makes a request for the record through the system, using an e-signature and likely the last 4 of the social security number (or some other validation method... perhaps scanning a drivers license or something)
* which sends the request (along with a fax number, and Direct address to send the patient records to) to the provider, using fax. This should use one of the fax apis... probably https://www.phaxio.com/
* There should be a Direct endpoint that ends up being in the DirectTrust and/or blue button trust bundles for Direct-based replies to patient records
* There should be a phaxio number that is used to receive requests... this might be done with one fax number per-request or it perhaps should use qr codes or something else to be able to re-use one fax number. 
* There are a couple of "valid" responses to a HIPAA record request, and a couple of typical requests that are not valid. 
* The provider sometimes asks for copying fees. In this event, the system should inform the the organization that any fees will be published on the web on their provider report... in order to shame providers into not having copying costs. 
* The provider can reply that they requests are excluded because of a valid exclusion (i.e. involement with a criminal investigation, a mental health record request, etc etc). Some of these should be dealt with more deeply, but in some cases the provider might be right to refuse the request and the system should drop the issue.
* The provider frequently replies that a specific form needs to be filled out. This is not the law but the system should A. create a manual queue for a human to actually fill out the form and B. inform the provider that they are being reported to OCR and C. report them to OCR
* The system should fax messages to the provider whenever a timer has passed that would cause the provider to be reported to OCR. 
* If possible, the system should be designed using a clean REST design so that third-party applications could make HIPAA requests through the application... 
* The system would be momentarily hosting PHI, and will need to hosted on something like Firehost or equivlent
* We would need to get a contribution of time from on the good Health IT lawyers we know regarding the details of the HIPAA record request process... for instance, there are some state laws which might provide greater access rights than HIPAA and also there might be some states in which automatically reporting to the state attorneys general might be better than working with OCR...
* Providers sometimes refuse to provide access to health data to third parties who are designated by the patient. This is against the rules too... 
* The site should provide a browseable shit-list of providers that over-charge for copies, who refuse to provide digital data, or who make other crappy excuses...

## Interoperabiltiy reporting
* It would be facinating to have a system that would allow patients to report when they are required to sneaker-net data between two providers.
* Choose the start and end providers.. and note who is blocking the process, allowing to document the excuses involved
* Could be used to specifically target a protocol like Direct, or could be used generally across protocols


## Adverse event reporting  
* This should be the last thing built...
* Should be a front end to http://www.fda.gov/Safety/MedWatch/ or autogenerate the pdf form.
* Should use rxNorm to get reliable medication chooser... perhaps the pillbox/pill image app data or something else like...
* 

## Other
* We should ask other patient communities what they would like to "report" or otherwise track... and who they want to do this with.
* Obviously we need to ensure that this does not become a healthgrades style "place to generally complians" but be issue-specific and remain targeted.

