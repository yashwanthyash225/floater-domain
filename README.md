# [Floater-Domain](https://itpa.somas.stonybrook.edu/ESA/floater_domain/)

## Introduction
The project Floater-Domain is built for users to select a custom rectangular domain on the map. Submitting the selected region after the selecion will trigger a process to run ESA(Ensemble Sensitivity Analysis) for the selected paramters. Please follow the [LINK](https://itpa.somas.stonybrook.edu/ESA/floater_domain/) to enter into the website.
<br>
After some time, the analysis will generate the images which can be found [here](https://www.wpc.ncep.noaa.gov/wpc_ensemble_clusters/esa/view_esa.php?cycle=2025051900&day=day_1&domain=domain1&ens=all_ensembles&field=standard_sens_of_24hr_avged_mslp_pc2&rfunc=qpf_pc1&sensvar=500hgt)

## Code Structure
This is a simple static website built using HTML, CSS, PHP.
- `index.html`  : This is the main file which contains code for displaying the values and selction of map can submitting the domain.
- `results.php` : Contains the result page after succesful submission of details of the domain.

Since, this is simple static website, the selected domain submissions will be stored in a tmp file and `view.php` is used to retrieve the data present in the tmp file. 

## External API [STADIA MAPS](https://stadiamaps.com) for the World Map and Selection
We are currently using external API from [Stadia Maps](https://stadiamaps.com) for using the World Map and the selection tool. <br>
- Create a free tier account [here](https://client.stadiamaps.com/account/)
- Replace the API-KEY in the `index.html` file at line 14.
- More details about the use of API is available [here](https://docs.stadiamaps.com/static-maps/)
