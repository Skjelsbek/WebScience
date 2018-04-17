  <div class="container">
    <h1>Velkommen til Lavprisekspressen!</h1>

    <form action="../php/buy_ticket.php" method="post">

      <!-- Select where to travel from and to -->
      <div class="from">
        <p>Påstigning</p>
        <select name="from">
          <option value="Oslo">Oslo</option>
          <option value="Lysaker">Lysaker</option>
          <option value="Hovik">Høvik</option>
          <option value="Drammen">Drammen</option>
          <option value="Fokserod">Fokserød</option>
          <option value="Skjelsvik">Skjelsvik</option>
          <option value="Brokelandsheia">Brokelandsheia</option>
        </select>
      </div>
      <div class="to">
        <p>Avstigning</p>
        <select name="to">
          <option value="Oslo">Oslo</option>
          <option value="Lysaker">Lysaker</option>
          <option value="Hovik">Høvik</option>
          <option value="Drammen">Drammen</option>
          <option value="Fokserod">Fokserød</option>
          <option value="Skjelsvik">Skjelsvik</option>
          <option value="Brokelandsheia">Brokelandsheia</option>
        </select>
      </div>

      <!-- Want return checkbox -->
      <div style="margin-top: 20px">
        Ønsker retur: <input id="want_return" style="width: 20px; height: 20px; margin: 0 4px;" type="checkbox">
      </div>

      <!-- Departure datepicker -->
      <div class="date_selection">
        <div class="departure">
          <p>Avreise</p>
          <div class='datepicker'></div>
        </div>

        <!-- Return datepicker -->
        <div class="return">
          <p>Hjemreise</p>
          <div class='datepicker'></div>
        </div>

        <!-- Buy ticket button -->
        <div class="button_container">
          <input id="buy_ticket_button" type="submit" name="buy_ticket_button" value="Kjøp Billett">
        </div>
      </div>

      <!-- Hidden input fields to pass the datepicker information via the post method (using javascript to put the date data in these filds) -->
      <input style="display: none" id="departure_date" type="text" name="departure_date">
      <input style="display: none" id="return_date" type="text" name="return_date">
    </form>
  </div>
