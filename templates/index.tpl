{include file="header.tpl"}



<div class="module">
  {include file="messages.tpl"}

  {if $smarty.get.password eq "webteam"}
    
  
    <table width=100% class="teams">
        <tr style="font-weight:bold"><td>TeamID</td><td>Team</td><td>Points</td><td>Locations</td><td>Time</td></tr>
        {foreach from=$logs item=log}
          <tr><td>{$log.tid}</td><td>{$log.name}</td><td>{$log.points}</td><td>{$log.location}</td><td>{$log.time}</td></tr>
        {foreachelse}
          <tr><td colspan=100% class="tcenter">No logs</td></tr>
        {/foreach}
      </table>
  
  {else}
  
    {if $result}
      <div class="location tcenter">
      
        {if !$team}
        
      
          <form class="tcenter" method="post"><br/>
          
            <h1>Insert your TeamID</h1><br/>
            <input type="text" size=30 class="tcenter" maxlength=5 name="id" value="{$cookie}"/>
            <input type="submit" value="Send"/><br/><br/>
            <small>If you don't remember it, find it on the event's main page!</small>
          </form><br/>
        {else}
      
        <form class="tcenter" method="get" action="index.php">
          <input type="submit" value="Go to main page"/>
        </form>
        {/if}
      </div>
    
    {else}
      {if !$team}
        {if !$success}
        <form class="tcenter" method="post"><br/>
          <h1>Register team</h1><br/><br/>
          <input type="text" size=30 maxlength=30 name="team"/>
          <input type="submit" value="Register team"/><br/><br/>
          <small>Use only letters, digits and spaces in team name. Max 30 chars.</small>
        </form><br/>
    
      
        {/if}
      {else}<br/>
        <h1 class="tcenter">Your TeamID: {$team}
        <br/>
        <small>Contact our team if that is wrong & good luck!</small></h1>
      {/if}
      <br/><br/>
      <table width=100% class="teams">
        <tr style="font-weight:bold"><td>TeamID</td><td>Team</td><td>Points</td><td>Places</td></tr>
        {foreach from=$teams item=team}
          <tr><td>{$team.id}</td><td>{$team.name}</td><td>{$team.points}</td><td>{$team.places}</td></tr>
        {foreachelse}
          <tr><td colspan=100% class="tcenter">No teams</td></tr>
        {/foreach}
      </table><br/><Br/>
      {if !$team}
      <div class="tcenter">
        <img src="images/qr1.png"/>
      </div>
      {/if}
    {/if}
  {/if}
</div>

{include file="footer.tpl"}