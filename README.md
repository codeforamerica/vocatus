# vocatus
An automated advocate for patient rights

In some cases, the healthcare system relies on "patient reporting of" in order to function properly. 

Vocatus is an automation of several of the most important ways that patients should report information. Specifically:

* Reporting to insurance companies, when healthcare providers are not covered by their insurance plans.
* Reporting to [HHS OCR](http://www.hhs.gov/ocr/office/) when a HIPAA request has been ignored.
* Reporting when a provider refuses to accept email or provide access to data digitally because HIPAA "does not allow it" (b/c it does allow it...
* Reporting when a provider refuses to accept a transmission of digital data as part of "View, Download and Transmit"
* Reporting when a provider refuses to transmit data in mechanism requested
* Reporting reactions to medications to the FDA.
* etc.

In fact, each of these reporting options represents an almost completely distinct workflow, with different steps depending on who needs to be kept in the loop. 

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

##  


