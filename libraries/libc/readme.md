## Getting started using glibc

The GNU C Library provides many of the low-level components used directly by programs written in the C or C++ languages. Many programming languages use the GNU C Library indirectly including C#, Java, Perl, Python, and Ruby (interpreters, VMs, or compiled code for these languages use glibc directly).

In the simplest case the program uses the glibc provided by the distribution, but you aren't limited to this. Perhaps you want to test a new feature, or a developer has asked if you can reproduce the bug with the latest glibc.

Whatever your needs are, these intructions are designed to guide you through the process of building and using upstream glibc.

The GNU C Library is designed to be a backwards compatible, portable, and high performance ISO C library. It aims to follow all relevant standards including ISO C11, POSIX.1-2008, and IEEE 754-2008.

The project was started circa 1988 and is more than 30 years old. You can see the complete project release history on the wiki.

### See more
- https://sourceware.org/glibc/started.html
- https://sourceware.org/glibc/libc.html
- https://www.gnu.org/software/libc/