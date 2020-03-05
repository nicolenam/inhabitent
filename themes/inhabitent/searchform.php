<form role="search" method="get" action="<?php echo home_url('/')?>">
                <fieldset>
                    <a href="#" class="search-toggle">
                        <i class="fa fa-search"></i>
                      
                    </a>
                    <label>
                         <input placeholder="Type and hit enter" type="search" name="s" value="<?php echo esc_attr(get_search_query()) ;?>" />
                         <input type="submit" id="search-submit" value="<?php echo esc_attr('Search')?>"/>
                    </label>
                    
                </fieldset>
</form>