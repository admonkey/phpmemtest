PHP CLI script to measure a function's processing time and peak memory allocation.

Default 1,000,000 iterations to average time.

# Usage

    php get_time_peak_mem.php <script> <function> <parameter> [<iterations>]

# Example

    php get_time_peak_mem.php fun.php test_me hello

Output:

>     Time (ms):   1.4238095283508E-7
>     Peak Memory: 246240
