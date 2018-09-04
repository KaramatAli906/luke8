<?php


require_once("include/Expressions/Expression/Boolean/BooleanExpression.php");

/**
 * <b>isAdmin()</b><br>
 * Returns true if "Current user" is admin.
 */
class isCurrentUserExpression extends BooleanExpression
{
    /**
     * Returns true if current user is admin.
     */
    public function evaluate()
    {
        global $current_user;
        
        $params = $this->getParameters();
        $userId =$params->evaluate();
        $currentUser = $current_user->id;
        
        if ($currentUser == $userId) {
            return AbstractExpression::$FALSE;
        }
        
        return AbstractExpression::$TRUE;
    }

    /**
     * Returns the JS Equivalent of the evaluate function.
     */
    public static function getJSEvaluate()
    {
        return <<<EOQ
            var params = this.getParameters();
		    var userId =  params[0] ? params[0].evaluate() : params.evaluate();

            var SEE = SUGAR.expressions.Expression;
            var currentUserId = SUGAR.App.user.get('id');
                
            if (currentUserId == userId) {
               return SEE.FALSE;
            }
            return SEE.TRUE;
EOQ;
    }

    /**
     * Any generic type will suffice.
     */
    public static function getParameterTypes()
    {
        return array(AbstractExpression::$STRING_TYPE);
    }

    /**
     * Returns the maximum number of parameters needed.
     */
    public static function getParamCount()
    {
        return 1;
    }

    /**
     * Returns the opreation name that this Expression should be
     * called by.
     */
    public static function getOperationName()
    {
        return 'isCurrentUser';
    }

    /**
     * Returns the String representation of this Expression.
     */
    public function toString()
    {
    }
}
