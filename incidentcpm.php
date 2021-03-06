<?php
/**
 * CPMObjectEventHandler: IncidentHandler
 * Package: RN
 * Objects: Incident
 * Actions: Create, Update
 * Version: 1.2
 * Purpose: Minimal CPM handler for incident create and update.
 */
use \RightNow\Connect\v1_2 as RNCPHP;
use \RightNow\CPM\v1 as RNCPM;
/**
 * Handler class for CPM
 */
class IncidentHandler implements RNCPM\ObjectEventHandler
{
    /**
     * Apply CPM logic to object.
     * @param int $runMode
     * @param int $action
     * @param object $incident
     * @param int $cycle
     */
    public static function apply($run_Mode, $action, $incident, $cycle)
    {
        if ($cycle !== 0) return;
        if (RNCPM\ActionUpdate == $action)
        {
         $assigned_agent=$incident->AssignedTo->Account->ID;
         if($assigned_agent):
             $agentAccount=RNCPHP\Account::fetch($assigned_agent);
             $agentAccessGroup=$agentAccount->CustomFields->Security->AgentAccessGroup->ID;
             $incident->CustomFields->Security->AgentAccessGroup=$agentAccessGroup;
             $incident->save(RNCPHP\RNObject::SuppressAll);
             RNCPHP\ConnectAPI::commit();
             $fp=fopen("/tmp/agentAccessGroup.txt","a");
             fwrite($fp,$assigned_agent."---".$agentAccessGroup."\n");
         endif;
        }
    }

} //Class Ends Here.
/**
 * CPM test harness
 */
class IncidentHandler_TestHarness implements RNCPM\ObjectEventHandler_TestHarness
{
/**
 * Set up test cases.
 */
 static $incident_get = NULL;
 		//------------------------------setup function-----------------------------------------------
 	public static function setup()
 	{
        static::$incident_get=RNCPHP\Incident::fetch(3222175);
        return;
 	}
    
/**
 * Return the object that we want to test with. You could also return
 * an array of objects to test more than one variation of an object.
 * @param int $action
 * @param class $object_type
 * @return object | array
 */
public static function fetchObject($action, $object_type)
{
        return (static::$incident_get);
}
/**
 * Validate test cases
 * @param int $action
 * @param object $Incident
 * @return bool
 */
public static function validate($action, $Incident)
{
     if (RNCPM\ActionUpdate == $action)
     {
      echo " Log updated ";
     }
     elseif (RNCPM\ActionCreate == $action)
     {
		echo " Log created ";
     }
    return true;
}
/**
 * Destroy every object created by this test. Not necessary since in
 * test mode and nothing is committed, but good practice if only to
 * document the side effects of this test.
 */
public static function cleanup()
{
      return;
}
}
?>
