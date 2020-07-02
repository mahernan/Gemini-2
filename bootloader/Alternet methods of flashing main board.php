Hi Paul and Robert,

If Gemini does not boot up properly after flashing even after toggling
power, the most probably explanations is that the .bin file was
corrupted. As I said, due to the lost of Ethernet connection during
flashing most browsers pop up a timeout window. I don't know what to do
against this. Do no simply press reload, but start at the home URL again.

But don't worry, there are many fallbacks after a problem.

What I propose: if you can't access the file over the web server
anymore, take the micro SD card out of J11 and store the NewGem... .bin
file onto it using your computer.
Put it back into J11 again.

Then start a terminal emulator like HyperTerminal and set up a
connection (usually to a USB2serial converter) of 115200bps, 8, n, 1, no
handshake. Connect to the upper serial port J10.

Connect a classical HC to J15.

Press all 4 diamond buttons of the HC and power up Gemini. This sets
the boot loader into interactive mode. You should see a help screen
showing up in the terminal emulator window. If not, press Enter and
check the settings.

First enter "DIR". This should show the available files including the
.bin files.

Next I suggest to use "COMP filename" to compare the flash content to
the bin file. If this is O.K., selecting "RUN" should start it.

If there's a difference, you can reprogram it using "PROG filename"

This is the easy alternative to the using the web interface, in case
there is no functional binary on the main board.
There's a small problem: serial port J10 stays blocked until next
cycling of power.

Just for completion:
The second alternative is using the ARM boot loader. Jumper J4 has to be
closed to select it, but there is a problem: in the process of
optimizing the wiring on the board, Aveox connected the UART0 serial
port to the Feature port, where it has only 3.3V level. It would need a
level adapter. Software for flashing over the ARM boot loader port is
free (FlashMagic.exe).

The third alternative would be flashing it using an JTAG adapter. I'm
using the Keil ULINK. The software is free (evaluation software from Keil).

As long as the boot loader works, the first method should work fine.

Ren�

****************************************
On the Serial Port Setting menu, for serial ports 2 and 3 you have the message
"Serial Port 2 (Pins 6,7 of the Feature port, 3.3V level) Note: This port is part of the Feature Port and has to be activated using the Hardware menu"
and
"Serial Port 3 (Pins 4,5 of the Feature port, 3.3V level) Note: This port is part of the Feature Port and has to be activated using the Hardware menu "

