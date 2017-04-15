# ThickeyHue

This is a set of php and python scripts to demonstrate how to control Hue lightbulbs with PHP and talk to PHP via http.

## Pi Setup
To setup the Raspberry Pi with Apache/php etc then you are best to follow slides 4 - 8 in the included presentation (see the presentation directory)

## Raspberry Pi Hat setup
This is a bit more complex and I'm not qualified enough to offer any better instructions than the ones that appear online.

### Hardware
* [Touch Capacitive Hat for Raspberry Pi](https://shop.pimoroni.com/products/adafruit-capacitive-touch-hat-for-raspberry-pi-mini-kit-mpr121).
* [Crocodile Clips](https://shop.pimoroni.com/products/crocodile-leads-set-of-10) 
* [Solderless Hammer header (Because I can't solder)](https://shop.pimoroni.com/products/gpio-hammer-header)

### Installation Instructions
You are best off following these [Instructions Here](https://learn.adafruit.com/mpr121-capacitive-touch-sensor-on-raspberry-pi-and-beaglebone-black/software), This page and the start of the second page was all I needed to get to where I needed things to be.

**Don't forget** to enable the GPIO pins [Take a look here](https://learn.adafruit.com/adafruits-raspberry-pi-lesson-4-gpio-setup/configuring-i2c#installing-kernel-support-with-raspi-config) The GPIO pins are not enabled by default so the hat won't work unless you do this!

### Python script
To get this to work correctly you will have to modify the touch.py script to have the correct IP address of your Pi.  I was lazy and didn't want to work out how to make it one variable.. sorry!