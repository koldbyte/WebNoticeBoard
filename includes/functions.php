<?php
/**
 * @params      : $a            array           the recursion array
 *              : $s            array           storage array
 *              : $l            integer         the depth level
 *
 */
if( !function_exists( 'array_flat' ) )
{
    function array_flat( $a, $s = array( ), $l = 0 )
    {
        # check if this is an array
        if( !is_array( $a ) )                           return $s;
       
        # go through the array values
        foreach( $a as $k => $v )
        {
            # check if the contained values are arrays
            if( !is_array( $v ) )
            {
                # store the value
                $s[ ]       = $v;
               
                # move to the next node
                continue;
               
            }
           
            # increment depth level
            $l++;
           
            # replace the content of stored values
            $s              = array_flat( $v, $s, $l );
           
            # decrement depth level
            $l--;
           
        }
       
        # get only unique values
        if( $l == 0 ) $s = array_values( array_unique( $s ) );
       
        # return stored values
        return $s;
       
    } # end of function array_flat( ...
   
} 
?>
