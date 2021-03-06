## Description
FreePBX is a fully featured web management system for Asterisk PBX server.
With Asterish PBX Server and the FreePBX web management system, you can create fully featured, complex telephony solutions.
PBX servers enable you to create private telephone services for use inside business environments or private use over the internet among friends.
These services can be used for free internet based phone calls to other users or to dial outside lines if connected to external phone services.

## Provisioning method
This application is provisioned using port exposure via the host system.

## Required ports
You will require the following ports on your NAS in order to run FreePBX:
8070 - TCP - HTTP port
8071 - TCP - Secure HTTP port
5060 - UDP - PJSIP transport port
5061 - UDP - Secure PJSIP transport port
5160 - UDP - SIP transport port
5161 - UDP - Secure SIP transport port
10000-10250 - UDP - RTP Audio transport port range
