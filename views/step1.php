<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">FAQs</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">How much is the event?</h6>
                    <small class="text-muted">
                        <table>
                            <tr>
                                <td>Dinner ticket</td>
                                <td>$<span id="eventTicketPrice">0</span></td>
                            </tr>
                            <tr>
                                <td>Table for eight</td>
                                <td>$<span id="tablePrice">0</span></td>
                            </tr>
                            <tr>
                                <td>Ticket enhancer (10 pack)</td>
                                <td>$<span id="ticketEnhancerPrice">0</span></td>
                            </tr>
                            <tr>
                                <td>Childcare</td>
                                <td>$<span id="childcarePrice">0</span> per child</td>
                            </tr>
                            <tr>
                                <td>Cabana</td>
                                <td>$<span id="cabanaPrice">0</span></td>
                            </tr>
                        </table>

                    </small>
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">What is included with a ticket?</h6>
                    <small class="text-muted">Entrance into the event, appetizers, dessert, and dinner is
                        included. Ticket
                        enhancers may be purchased for drinks and other onsite activities.
                    </small>
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">Is anything included with the table purchase?</h6>
                    <small class="text-muted">Your party will enjoy two bottles of complimentary wine.</small>
                </div>
            </li>


            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">What is a ticket enhancer?</h6>
                    <small class="text-muted">Ticket enhancers are used for drinks, the egg pull, and the wine
                        pull while at the event. It is sold as a 10 pack of tickets.<br/>
                        <br/>Drinks - 4 tickets
                        <br/>Wine Pull - 3 tickets
                        <br/>Egg Pull - 2 tickets
                    </small>
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">Is childcare offered?</h6>
                    <small class="text-muted">Only to NCM enrolled students. Childcare will include pizza and
                        dessert.
                    </small>
                </div>
            </li>

        </ul>

    </div>
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Your Order</h4>
        <form class="needs-validation" novalidate method="POST">

            <div class="mb-3">
                <label for="eventTickets">How many tickets would you like to purchase?</label>
                <p class="text-muted">$<span id="eventTicketPrice2">0</span> each or purchase eight tickets to
                    reserve a table for $<span id="tablePrice2">0</span></p>
                <input type="number" class="form-control" id="eventTicketQty" name="eventTicketQty" value="1">
            </div>
            <div class="mb-3">
                <label for="enhancerTickets">How many ticket enhancers would you like?</label>
                <p class="text-muted">$<span id="ticketEnhancerPrice2">0</span> per 10 pack of tickets.</p>
                <input type="number" class="form-control" id="ticketEnhancerQty" name="ticketEnhancerQty">
            </div>
            <div class="mb-3">
                <label for="enhancerTickets">Would you like to make a one-time contribution to support our mission
                    in teaching independence, mastery of self, and the environment?</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input name="additionalContribution" type="text" class="form-control" id="inlineFormInputGroup">
                </div>
            </div>


            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
    </div>
</div>