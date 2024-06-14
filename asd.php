<form action="" method="" class="form-container english" id="englishForm">
    <div class="main-containers">
            <div class="checkbox-container">
                <div class="checkbox-item">
                    <input type="radio" id="checkbox1" name="identification"  onclick="navigateToPage(this)">
                    <label for="checkbox1">Literacy in English</label>
                </div>
                <div class="checkbox-item">
                    <input type="radio" id="checkbox2" name="identification" onclick="navigateToPage(this)">
                    <label for="checkbox2">Literacy in Filipino</label>
                </div>
                <div class="checkbox-item">
                    <input type="radio" id="checkbox3" name="identification" onclick="navigateToPage(this)">
                    <label for="checkbox3">Numeracy</label>
                </div>
                <div class="checkbox-item">
                    <input type="radio" id="checkbox4" name="identification" checked onclick="navigateToPage(this)">
                    <label for="checkbox4">Behavioral</label>
                </div>
            </div>

                <div class="rows">
                <div class="column">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left: 7px">S.Y:2023-2024</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="select-wrapper1">
                    <select id="topdown" name="quarter" class="containerss second" style="background-color: #F3F3F3;">
                        <option value="" disabled selected hidden>Quarter 1</option>
                        <option value="q1">Quarter 1</option>
                        <option value="q2">Quarter 2</option>
                        <option value="q3">Quarter 3</option>
                        <option value="q4">Quarter 4</option>
                    </select>
                </div>
            </div>
                    <div class="columnss" style="background:none; ">
                        <div class="containerss seconds" >
                            <button style="background:transparent; border: none;"><h3>Print Records</h3></button>
                        </div>
                    </div>
                </div>

                <div class="rows" style="display: none;">
                    <div class="columns" >
                        <div class="containerss" style="background-color: #190572">
                            <h3 style="margin-left:10px">LRN</h3>
                        </div>
                    </div>
                    <div class="columns column-rights">
                        <div class="containerss" style="background-color: #F3F3F3;">
                        <input type="text" name="lrn" id="lrn"  readonly>
                        </div>
                    </div>
                    <div class="columns column-lefts">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Status</h3>
                        </div>
                    </div>
                    <div class="columns half-widths">
                        <div class="select-wrapper">
                            <select id="topdown2" name="quarter" class="containers second" onchange="redirectToQuarter()" style="background-color: #F3F3F3;">
                                <option value="" disabled selected hidden>Pending</option>
                                <option value="On-Going">On-Going</option>
                                <option value="Resolved">Resolved</option>
                                <option value="Unresolved">Unresolved</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="rows">
                    <div class="columns" >
                        <div class="containerss" style="background-color: #190572">
                            <h3 style="margin-left:10px">LRN</h3>
                        </div>
                    </div>
                    <div class="columns column-rights">
                        <div class="containerss" style="background-color: #F3F3F3;">
                        <input type="text" name="lrn" id="lrn"  readonly>
                        </div>
                    </div>
                    <div class="columns column-lefts">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Status</h3>
                        </div>
                    </div>
                    <div class="columns half-widths">
                        <div class="select-wrapper rights">
                            <select id="topdown2" name="quarter" class="containerss second" onchange="redirectToQuarter()" style="background-color: #F3F3F3;">
                                <option value="" disabled selected hidden>Pending</option>
                                <option value="On-Going">On-Going</option>
                                <option value="Resolved">Resolved</option>
                                <option value="Unresolved">Unresolved</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="rows">
                    <div class="columns">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Pupil's Name</h3>
                        </div>
                    </div>
                    <div class="columns column-rights">
                        <div class="containerss" style="background-color: #F3F3F3;">
                        <input type="text" name="fullname" id="fullname"  readonly>
                        </div>
                    </div>
                    <div class="columns column-lefts">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Grade & Section</h3>
                        </div>
                    </div>
                    <div class="columns half-widths">
                        <div class="containerss" style="background-color: #F3F3F3;">
                        <input type="text" name="classification" id="classification" class="rights" readonly>
                        </div>
                    </div>
                </div>


                <div class="rows">
                    <div class="columns">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Guardian Name</h3>
                        </div>
                    </div>
                    <div class="columns column-rights">
                        <div class="containerss editable-containers" style="background-color: #F3F3F3;">
                            <input type="text" name="gname" id="gname" value="" placeholder=" " required>
                        </div>
                    </div>
                    <div class="columns column-lefts">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Contact Number</h3>
                        </div>
                    </div>
                    <div class="columns half-widths">
                        <div class="containerss editable-containers" style="background-color: #F3F3F3;">
                            <input type="text" name="number" id="cnumber" value="" placeholder=" " required class="rights">
                        </div>
                    </div>
                </div>

                <table class="update-record" >
                <tr id="row1">
                        <th>Notes</th>
                        <th>Topic/Matter</th>
                        <th>Intervention</th>
                        <th>Advice</th>
                        <th>Recommended to</th>
                    </tr>
                <tr id="row2" class="table_body">
                        <td><textarea placeholder="Enter Notes"></textarea><span class="dates"></span></td>
                        <td><textarea placeholder="Enter Topic/Matter"></textarea><span class="dates"></span></td>
                        <td><textarea placeholder="Enter Intervention"></textarea><span class="dates"></span></td>
                        <td><textarea placeholder="Enter Advice"></textarea><span class="dates"></span></td>
                        <td><textarea placeholder="Enter Recommended to"></textarea><span class="dates"></span></td>
                    </tr>
                </table>
           
                <button id="saveButton" class="saveButton">Save Changes</button>
            </form>